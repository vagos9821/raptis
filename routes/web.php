<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ClientsController;


Route::get('/',function () {
    $clients = App\Models\Client::all();
    $categories = App\Models\Category::all();
    return view('home', compact('clients', 'categories'));
});
