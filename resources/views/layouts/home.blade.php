<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta name="google" content="notranslate">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @section('viewport')
            <meta name="viewport" content="width=device-width, initial-scale=1">
        @show

        <title>GSE</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        @section('styles')
            <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css">
            <link rel="stylesheet" href="{{ mix('/css/home.css') }}" type="text/css">
        @show
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Glyn Street Elite
                </div>
                <div>
                    <img src="{{ asset('images/largerGSELogo.jpg') }}" alt="GSE Logo" class="border-radius-50p pb1 gse-logo">
                </div>
                <div class="links home-links">
                    <a href="/team-sheets" class="link home-link pl1 pr1 fz20">Team sheets</a>
                    <a href="/match-reports" class="link home-link pl1 pr1 fz20">Match reports</a>
                    <a href="/match-highlights" class="link home-link pl1 pr1 fz20">Match highlights</a>
                    <a href="/news" class="link home-link pl1 pr1 fz20">News</a>
                    <a href="/player-profiles" class="link home-link pl1 pr1 fz20">Player profiles</a>
                </div>
            </div>
        </div>
        @section('scripts')
            <script src="{{ mix('js/app.js') }}"></script>
        @show
    </body>
</html>
