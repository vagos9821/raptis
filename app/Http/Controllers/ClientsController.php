<?php

namespace App\Http\Controllers;

use App\Models\Client;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('home', compact('clients'));
    }
}
