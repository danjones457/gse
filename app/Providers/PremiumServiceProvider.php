<?php

namespace App\Providers;

use Auth;
use Blade;
use Illuminate\Support\ServiceProvider;

class PremiumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('hasFeature', function ($feature) {
            return Auth::check()
                ? Auth::user()->hasFeature($feature)
                : false;
        });
    }
}
