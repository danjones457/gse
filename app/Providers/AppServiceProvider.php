<?php

namespace App\Providers;

use Auth;
use Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('auth', function () {
            return Auth::check();
        });

        Blade::if('admin', function () {
            return Auth::user()->isAdmin();
        });

        Blade::if('regionadmin', function () {
            return Auth::user()->isRegionAdmin();
        });

        Blade::if('superadmin', function () {
            return Auth::user()->isSuperAdmin();
        });

        Blade::if('premium', function () {
            return Auth::user()->isPremium() || Auth::user()->onTrial();
        });

        Blade::if('notpremium', function () {
            return ! Auth::user()->isPremium() && ! Auth::user()->onTrial();
        });

        Blade::if('fullpremium', function () {
            return Auth::user()->isPremium();
        });

        Blade::if('notfullpremium', function () {
            return ! Auth::user()->isPremium();
        });

        Blade::if('branded', function () {
            return Auth::user()->branding;
        });

        Blade::if('notbranded', function () {
            return ! Auth::user()->branding;
        });

        Blade::if('presentationmode', function () {
            return session()->has('presentation_mode') && session('presentation_mode');
        });

        Blade::if('notpresentationmode', function () {
            return ! session()->has('presentation_mode') || ! session('presentation_mode');
        });

        View::composer(['blog.index', 'blog.post', 'blog.category'], function ($view) {
            $view->with('meta', app('App\Blog\Meta'));
        });
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
