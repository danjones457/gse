<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrimStrings::class,
        \App\Http\Middleware\TransliterateStrings::class,
        \App\Http\Middleware\TrustProxies::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            // \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \App\Http\Middleware\UserImpersonation::class,
            \App\Http\Middleware\VerifyEmailAddress::class,
            \App\Http\Middleware\PreventConcurrentLogins::class,
            \App\Http\Middleware\Language::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'premium' => \App\Http\Middleware\Premium::class,
        'admin' => \App\Http\Middleware\Admin::class,
        'groupAdmin' => \App\Http\Middleware\GroupAdmin::class,
        'networkAdmin' => \App\Http\Middleware\NetworkAdmin::class,
        'clientAccessible' => \App\Http\Middleware\VerifyClientAccessible::class,
        'admin' => \App\Http\Middleware\Admin::class,
        'superAdmin' => \App\Http\Middleware\SuperAdmin::class,
        'regionAdmin' => \App\Http\Middleware\RegionAdmin::class,
        'api.v2' => \App\Http\Middleware\APIV2::class,
        'presentationModeOnly' => \App\Http\Middleware\PresentationModeOnly::class,
        'adviserModeOnly' => \App\Http\Middleware\AdviserModeOnly::class,
        'feature' => \App\Http\Middleware\Feature::class,
    ];
}
