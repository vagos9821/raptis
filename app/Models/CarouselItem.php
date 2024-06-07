<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarouselItem extends Model
{
    protected $fillable = ['image', 'alt_text', 'svg_name', 'text_content'];
}

