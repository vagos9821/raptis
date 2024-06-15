<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;
use App\Models\Client;
use App\Models\Category;


Route::get('/{locale}', function ($locale = null) {
    $clients = Client::all();
    $categories = Category::all();

    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
    }

    return view('home', compact('clients', 'categories'));
});

Route::get('/', function () {
    $clients = Client::all();
    $categories = Category::all();

    App::setLocale('el');

    return view('home', compact('clients', 'categories'));
});
