<?php

use App\Models\Category;
use App\Models\Client;
use App\Models\Products;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
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

    // Check if environment is local
    if (App::environment('local')) {
        $categories = Category::all();
        $products = Products::all();
        $clients = Client::all();

        // Fetch images
        $directory = public_path('raptis_photos');
        $imageFiles = File::files($directory);
        $images = array_map('basename', $imageFiles);

        return compact('categories', 'products', 'images', 'clients');
    }

    // Fetch all data and cache it

    $categories = Category::all();
    $products = Products::all();
    $clients = Client::all();

    // Fetch images
    $directory = storage_path('app/public/raptis_photos');
    $imageFiles = glob($directory."/*.{jpg,jpeg,png,gif,svg,webp}", GLOB_BRACE);
    $images = array_map('basename', $imageFiles);

    return compact('categories', 'products', 'images', 'clients');

}

// General route function to cache views
function getCachedView($viewName, $locale = null)
{
    $cacheKey = $locale ? "{$viewName}-{$locale}" : $viewName;

    // Check if environment is local
    if (App::environment('local')) {
        $data = fetchData($locale);
        return view($viewName, $data)->render();
    }

    $data = fetchData($locale);
    return view($viewName, $data)->render();
}

// Define routes with caching logic
Route::get('/{locale?}/products', function ($locale = null) {
    return getCachedView('our-products', $locale);
});

Route::get('/products', function ($locale = null) {
    return getCachedView('our-products', $locale);
});

Route::get('/{locale?}/about-us', function ($locale = null) {
    return getCachedView('about-us', $locale);
});

Route::get('/about-us', function ($locale = null) {
    return getCachedView('about-us', $locale);
});

Route::get('/{locale?}', function ($locale = null) {
    return getCachedView('home', $locale);
});

Route::get('/', function ($locale = null) {
    return getCachedView('home', $locale);
});
