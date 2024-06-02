<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('svg', function ($expression) {
            $expression = str_replace("'","",$expression);
            $svgPath = public_path("svg/{$expression}.svg");
            if (File::exists($svgPath)) {
                $svgContent = File::get($svgPath);
                return $svgContent;
            }
            return $expression;
        });
    }
}
