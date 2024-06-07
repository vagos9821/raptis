<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselItem;

class CarouselController extends Controller
{
    public function index()
    {
        $carouselItems = CarouselItem::all();
        
        return view('carousel.index', compact('carouselItems'));
    }
}

