<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch(Request $request, string $locale)
    {
        if (in_array($locale, ['en', 'fr'])) {
            Session::put('locale', $locale);
            Cookie::queue('locale', $locale, 60 * 24 * 365);
            App::setLocale($locale);
        }

        return redirect()->back();
    }
}
