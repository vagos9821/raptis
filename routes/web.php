<?php

use App\Models\Client;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

// Function to fetch clients, categories, and images based on locale
function fetchData($locale = null)
{
    // Set locale
    if ($locale && in_array($locale, config('app.available_locales'))) {
        App::setLocale($locale);
    } else {
        App::setLocale('el');
    }

    // Fetch clients and categories
    $clients = Cache::remember('clients', 600, function () {
        return Client::all();
    });

    $categories = Cache::remember('categories', 600, function () {
        return Category::all();
    });

    $products = Cache::remember('products', 600, function () {
        return Products::all();
    });

    // Fetch images
    $directory = public_path('raptis_photos');
    $images = Cache::remember('images', 600, function () use ($directory) {
        $imageFiles = glob($directory . "/*.{jpg,jpeg,png,gif,svg,webp}", GLOB_BRACE);
        return array_map('basename', $imageFiles);
    });

    return compact('clients', 'categories', 'images', 'products');
}

// Route for /products with optional locale
Route::get('/{locale?}/products', function ($locale = null) {
    if (Cache::has('our-products')) {
        $cachedView = Cache::get('our-products');
        return $cachedView;
    }

    $data = fetchData($locale);
    $view = view('our-products', $data)->render();
    Cache::put('our-products', $view, 600);

    return $view;
});

// Route for /products without locale
Route::get('/products', function () {
    if (Cache::has('our-products')) {
        $cachedView = Cache::get('our-products');
        return $cachedView;
    }

    $data = fetchData($locale);
    $view = view('our-products', $data)->render();
    Cache::put('our-products', $view, 600);

    return $view;
});

// Route for /about-us with optional locale
Route::get('/{locale?}/about-us', function ($locale = null) {
    if (Cache::has('about-us')) {
        $cachedView = Cache::get('about-us');
        return $cachedView;
    }

    $data = fetchData($locale);
    $view = view('about-us', $data)->render();
    Cache::put('about-us', $view, 600);

    return $view;
});

// Route for /about-us without locale
Route::get('/about-us', function () {
    if (Cache::has('about-us')) {
        $cachedView = Cache::get('about-us');
        return $cachedView;
    }

    $data = fetchData($locale);
    $view = view('about-us', $data)->render();
    Cache::put('about-us', $view, 600);

    return $view;
});

// General route for home with optional locale
Route::get('/{locale?}', function ($locale = null) {
    if (Cache::has('home')) {
        $cachedView = Cache::get('home');
        return $cachedView;
    }

    $data = fetchData($locale);
    $view = view('home', $data)->render();
    Cache::put('home', $view, 600);

    return $view;
});
