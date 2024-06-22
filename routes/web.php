<?php

use App\Models\Client;
use App\Models\Category;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Encoders\AutoEncoder;
use Intervention\Image\Laravel\Facades\Image;

// Function to set the locale
function setMyLocale($locale = null)
{
    if ($locale && in_array($locale, config('app.available_locales'))) {
        App::setLocale($locale);
    } else {
        App::setLocale('el');
    }
}

// Route for /products with optional locale
Route::get('/{locale?}/products', function ($locale = null) {
    setMyLocale($locale);

    $clients = Client::all();
    $categories = Category::all();

    return view('our-products', compact('clients', 'categories'));
});

// Route for /products without locale
Route::get('/products', function () {
    setMyLocale(null);

    $clients = Client::all();
    $categories = Category::all();
    $directory = public_path('raptis_photos');
    $images = [];

    if (is_dir($directory)) {
        $files = scandir($directory);
        foreach ($files as $file) {
            if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg'])) {
                $images[] = $file;
            }
        }
    }

    return view('our-products', compact('clients', 'categories', 'images'));
});

// General route for home with optional locale
Route::get('/{locale?}', function ($locale = null) {
    setMyLocale($locale);

    $clients = Client::all();
    $categories = Category::all();
    $directory = public_path('raptis_photos');
    $images = [];

    if (is_dir($directory)) {
        $files = scandir($directory);
        foreach ($files as $file) {
            if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['JPG'])) {
                $images[] = $file;
            }
        }
    }

    return view('home', compact('clients', 'categories', 'images'));
});
