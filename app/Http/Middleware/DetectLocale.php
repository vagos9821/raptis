<?php

namespace App\Http\Middleware;

use Closure;
use GeoIp2\Database\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DetectLocale
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip(); // Get user's IP address
        $reader = new Reader(storage_path('app/geoip/GeoLite2-Country.mmdb'));

        try {
            $record = $reader->country($ip);
            $countryCode = $record->country->isoCode;

            if ($countryCode !== 'GR') {
                App::setLocale('en');
            } else {
                App::setLocale('el');
            }
        } catch (\Exception $e) {
            // Fallback to default locale or handle exception as needed
            App::setLocale('en');
        }

        return $next($request);
    }
}
