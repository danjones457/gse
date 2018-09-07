<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $locale = Auth::user()->region == 'uk' ? 'gb' : Auth::user()->region;
        } else {
            $locale = $_COOKIE['locale'] ?? 'gb';
        }

        if (in_array($locale, config('app.locales'))) {
            App::setLocale($locale);
        } else {
            App::setLocale(config('app.fallback_locale'));
        }

        return $next($request);
    }
}
