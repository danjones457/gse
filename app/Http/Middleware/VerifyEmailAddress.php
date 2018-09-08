<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class VerifyEmailAddress
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
        if (! Auth::check()) {
            return $next($request);
        }

        if (! preg_match("[verify-email|logout]", url()->current()) && ! Auth::user()->verified) {
            return redirect()->route('verify-email');
        }

        return $next($request);
    }
}
