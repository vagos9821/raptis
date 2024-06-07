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
            // Remove quotes from the expression and split by comma
            $params = array_map('trim', explode(',', str_replace("'", "", $expression)));

            // Extract the file name and optional class name
            $fileName = $params[0] ?? '';
            $className = $params[1] ?? '';

            // Construct the path to the SVG file
            $svgPath = public_path("svg/{$fileName}.svg");

            if (!File::exists($svgPath)) {
                return $fileName;  // Return the file name if SVG file does not exist
            }

            // Load the SVG content
            $svgContent = File::get($svgPath);

            // Create a new DOMDocument instance and suppress errors
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadXML($svgContent, LIBXML_NOERROR | LIBXML_NOWARNING);
            libxml_clear_errors();

            // Get the <svg> element
            $svgElement = $dom->getElementsByTagName('svg')->item(0);

            if ($svgElement && !empty($className)) {
                // Append or set the class attribute
                $existingClass = $svgElement->getAttribute('class');
                $newClass = trim("{$existingClass} {$className}");
                $svgElement->setAttribute('class', $newClass);

                // Save the modified SVG content
                $svgContent = $dom->saveXML($svgElement);
            }

            return $svgContent;
        });
    }
}
