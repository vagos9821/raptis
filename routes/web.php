<?php

use App\Models\Category;
use App\Models\Client;
use App\Models\Image;
use App\Models\Products;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

// Function to fetch clients, categories, and images based on locale
function fetchData($locale = null)
{
    // Set locale
    // if ($locale && in_array($locale, config('app.available_locales'))) {
    //     App::setLocale($locale);
    // } else {
    //     App::setLocale('el');
    // }

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


Route::group(['prefix' => '{locale}'], function () {
    Route::get('/', function () {
        return view('home', fetchData());
    });

    Route::get('/products', function () {
        return view('our-products', fetchData());
    });

    Route::get('/about-us', function () {
        return view('about-us', fetchData());
    });
});

// Default Route (redirects to default locale)
Route::get('/', function () {
    return redirect(config('app.fallback_locale'));
});

