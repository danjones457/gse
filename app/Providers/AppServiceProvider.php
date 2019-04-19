<?php

namespace App\Providers;

use Auth;
use Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Mail\SubscriptionInterface',
            'App\Mail\MailChimpSubscription'
        );
        $this->app->bind(
            'App\Contracts\MessagingInterface',
            'App\Messaging\Twilio'
        );
    }
}
