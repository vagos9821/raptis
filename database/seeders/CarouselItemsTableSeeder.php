<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarouselItem;

class CarouselItemsTableSeeder extends Seeder
{
    public function run()
    {
        CarouselItem::create([
            'image' => 'aboutUsImg.png',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-dark',
            'text_content' => 'Missguided is a UK-based fashion retailer that has nearly doubled in size since last year. They integrated Stripe to deliver seamless checkout across mobile and web for customers in 100+ countries, all while automatically combating fraud.'
        ]);

        CarouselItem::create([
            'image' => 'p1.png',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-light',
            'text_content' => 'Missguided is a UK-based fashion retailer that has nearly doubled in size since last year. They integrated Stripe to deliver seamless checkout across mobile and web for customers in 100+ countries, all while automatically combating fraud.'
        ]);

        CarouselItem::create([
            'image' => 'p2.png',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-dark',
            'text_content' => 'Missguided is a UK-based fashion retailer that has nearly doubled in size since last year. They integrated Stripe to deliver seamless checkout across mobile and web for customers in 100+ countries, all while automatically combating fraud.'
        ]);

        CarouselItem::create([
            'image' => 'p3.png',
            'alt_text' => 'About Us Image',
            'svg_name' => 'logo-light',
            'text_content' => 'Missguided is a UK-based fashion retailer that has nearly doubled in size since last year. They integrated Stripe to deliver seamless checkout across mobile and web for customers in 100+ countries, all while automatically combating fraud.'
        ]);
        // Add more items as needed
    }
}
