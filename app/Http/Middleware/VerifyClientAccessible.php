<?php

namespace App\Http\Middleware;

use App\Client;
use Auth;
use Closure;

class VerifyClientAccessible
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
        $nextRequest = $next($request);

        if (! Auth::check()) {
            return redirect()->route('login');
        }

        $params = $request->route()->parameters();

        $user = Auth::user();
        $client = Client::find($params['clientid']);

        if (is_null($client) || ! $user->canAccess($client)) {
            $user = Auth::user()->fresh();
            if (is_null($client) || ! $user->canAccess($client)) {
                return redirect()->route('myclients');
            }
        }

        // Update the client's "updated_at" field.
        $client->touch();

        return $nextRequest;
    }
}
