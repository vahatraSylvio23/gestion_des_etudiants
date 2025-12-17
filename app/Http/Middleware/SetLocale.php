<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = null;
        
        if (Session::has('locale')) {
            $locale = Session::get('locale');
        } elseif ($request->hasCookie('locale')) {
            $locale = $request->cookie('locale');
        }
        
        if ($locale && in_array($locale, ['en', 'fr'])) {
            App::setLocale($locale);
            if (!Session::has('locale')) {
                Session::put('locale', $locale);
            }
        }
        
        return $next($request);
    }
}
