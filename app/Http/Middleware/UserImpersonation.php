<?php

namespace App\Http\Middleware;

use Auth;
use Route;
use Closure;

class UserImpersonation
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
            if (session()->has('admin.impersonate') && stristr(Route::currentRouteName(), "admin") === false) {
                Auth::onceUsingId(session('admin.impersonate'));
            }
        }
        return $next($request);
    }

    /**
     * Hand the termination of an incoming request.
     *
     * @param \Illiminate\Http\Request  $request
     * @param \Illuminate\Http\Response  $response
     * @return void
     */
    public function terminate($request, $response)
    {
        // TODO: Log the endpoint URI hit and any request data into an admin audit log
    }
}
