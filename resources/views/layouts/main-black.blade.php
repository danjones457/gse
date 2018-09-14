<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" ng-app="gse" ng-controller="main">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125601846-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-125601846-1');
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta name="google" content="notranslate">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @section('viewport')
            <meta name="viewport" content="width=device-width, initial-scale=1">
        @show

        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        @section('styles')
            <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css">
            <link rel="stylesheet" href="{{ mix('css/main.css') }}" type="text/css">
        @show
    </head>
    <body ng-controller="@yield('controller', 'app')" style="background-color: #000000">
        <div class="header-links hide-mobile">
            <a href="/team-sheets" class="link link-yellow header-link"><i class="fa fa-futbol-o" aria-hidden="true"></i> Team sheets</a>
            <a href="/match-reports" class="link link-yellow header-link"><i class="fa fa-coffee" aria-hidden="true"></i> Match reports</a>
            <a href="/match-highlights" class="link link-yellow header-link"><i class="fa fa-video-camera" aria-hidden="true"></i> Match highlights</a>
            <a href="/news" class="link link-yellow header-link"><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a>
            <a href="/player-profiles" class="link link-yellow header-link"><i class="fa fa-user-circle" aria-hidden="true"></i> Player profiles</a>
            <a href="/stats" class="link link-yellow header-link"><i class="fa fa-bar-chart" aria-hidden="true"></i> Stats</a>
        </div>
        <div class="mobile-menu show-mobile">
            <div class="pl1 fz30 flex">
                <div ng-click="expand = !expand">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </div>
            <div class="mobile-menu-container" ng-show="expand">
                <a href="/team-sheets" class="link link-yellow mobile-link"><i class="fa fa-futbol-o" aria-hidden="true"></i> Team sheets</a>
                <a href="/match-reports" class="link link-yellow mobile-link"><i class="fa fa-coffee" aria-hidden="true"></i> Match reports</a>
                <a href="/match-highlights" class="link link-yellow mobile-link"><i class="fa fa-video-camera" aria-hidden="true"></i> Match highlights</a>
                <a href="/news" class="link link-yellow mobile-link"><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a>
                <a href="/player-profiles" class="link link-yellow mobile-link"><i class="fa fa-user-circle" aria-hidden="true"></i> Player profiles</a>
                <a href="/stats" class="link link-yellow mobile-link"><i class="fa fa-bar-chart" aria-hidden="true"></i> Stats</a>
            </div>
        </div>
        @section('content')

        @show
        @section('scripts')
            <script src="{{ mix('js/app.js') }}"></script>
            <script src="{{ mix('js/main.js') }}"></script>
        @show
    </body>
</html>
