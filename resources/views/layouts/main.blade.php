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

        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        @section('styles')
            <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css">
            <link rel="stylesheet" href="{{ mix('css/main.css') }}" type="text/css">
        @show
    </head>
    <body ng-controller="@yield('controller', 'app')">
        @include('layouts.menu')
        <div class="web-content">
            @section('content')
            @show
        </div>
        @include('layouts.footer')
        @section('scripts')
            <script src="{{ mix('js/app.js') }}"></script>
            <script src="{{ mix('js/main.js') }}"></script>
        @show
    </body>
</html>
