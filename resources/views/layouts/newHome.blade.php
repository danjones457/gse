@extends('layouts.main-black')

@section('title', 'Glyn Street Elite')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/home.css') }}" type="text/css">
@endsection

@section('content')

<div class="flex-center position-ref">
    <div class="content">
        <div class="title m-b-md">
            Glyn Street Elite
        </div>
        <div>
            <img src="{{ asset('images/largerGSELogo.jpg') }}" alt="GSE Logo" class="border-radius-50p pb1 gse-logo">
        </div>
        <div class="w100p tac">
            <div class="text-yellow mla mra intro">
                Welcome to the home of GSE. Click around the website and see everything from the player profiles to the awards they have received.
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
    @parent
    <script src="{{ mix('js/home.js') }}"></script>
@endsection
