<!DOCTYPE html>
<html lang="en" ng-app="" ng-controller="main">
    <head>
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
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

        @section('styles')
            <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css">
            <link rel="stylesheet" href="{{ mix('css/main.css') }}" type="text/css">
        @show
    </head>
    <body>
        <div class="header-links">
            <a href="/team-sheets" class="link link-yellow header-link">Team sheets</a>
            <a href="/match-reports" class="link link-yellow header-link">Match reports</a>
            <a href="/match-highlights" class="link link-yellow header-link">Match highlights</a>
            <a href="/news" class="link link-yellow header-link">News</a>
            <a href="/player-profiles" class="link link-yellow header-link">Player profiles</a>
        </div>
        @section('content')

        @show
        @section('scripts')
            <script src="{{ mix('js/app.js') }}"></script>
        @show
    </body>
</html>
