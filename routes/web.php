<?php

use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

// Function to fetch clients, categories, and images based on locale
function fetchData($locale = null)
{
    // Set locale
    if ($locale && in_array($locale, config('app.available_locales'))) {
        App::setLocale($locale);
    } else {
        App::setLocale('el');
    }

    // Cache key should include locale to handle multiple locales
    $cacheKey = "data-{$locale}";

    // Fetch all data and cache it
    return Cache::remember($cacheKey, 600, function () {
        $categories = Category::all();
        $products = Products::all();

        // Fetch images
        $directory = public_path('raptis_photos');
        $imageFiles = glob($directory . "/*.{jpg,jpeg,png,gif,svg,webp}", GLOB_BRACE);
        $images = array_map('basename', $imageFiles);

        return compact('categories', 'products', 'images', );
    });
}

// General route function to cache views
function getCachedView($viewName, $locale = null)
{
    $cacheKey = $locale ? "{$viewName}-{$locale}" : $viewName;
    return Cache::remember($cacheKey, 600, function () use ($viewName, $locale) {
        $data = fetchData($locale);
        return view($viewName, $data)->render();
    });
}

// Define routes with caching logic
Route::get('/{locale?}/products', function ($locale = null) {
    return getCachedView('our-products', $locale);
});

Route::get('/{locale?}/about-us', function ($locale = null) {
    return getCachedView('about-us', $locale);
});

Route::get('/{locale?}', function ($locale = null) {
    return getCachedView('home', $locale);
});

