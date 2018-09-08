<?php

namespace App\Http\Middleware;

use App\Helpers\Slack;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class PreventConcurrentLogins
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

        $user = Auth::user();
        if (!session()->has('admin.impersonate')) {
            if (session('login_web_token') != $user->token && !$user->isAdmin()) {
                event(new \App\Events\Auth\ConcurrentLogin($user));
                Auth::logout();
                session()->flush();
                return redirect('/login')->with('status', 'booted_concurrent_logins');
            }
        }

        return $next($request);
    }
}
