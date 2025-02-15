<?php

use App\Models\Category;
use App\Models\Client;
use App\Models\Image;
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

    $categories = Category::all();
    $products = Products::all();
    $clients = Client::all();

    $images = Image::all();

    return compact('categories', 'products', 'images', 'clients');

}

// General route function to cache views
function getCachedView($viewName, $locale = null)
{
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
