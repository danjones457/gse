@extends('layouts.main')

@section('title', 'Player profiles')
@section('controller', 'player-profile')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/player-profile.css') }}" type="text/css">
@endsection

@section('content')

@foreach($player as $player)
<div class="profile-container flex flex-wrap-wrap">
    <div class="pl1 pt1 pr1 col-lg-4 profile-image-container">
        <img src="{{ asset('images/largerGSELogo.jpg') }}" alt="" class="border-radius-50p profile-image">
    </div>
    <div class="p1 mla profile-text">
        <span class="fz55">{{ $player->firstname}} {{ $player->lastname }}</span><br>
        <span class="fz20">D.O.B: {{ $player->dob }}</span><br>
        <span class="fz20">Positions: {{ $player->positions }}</span><br>
        <span class="fz20">Bio: {{ $player->description }}</span><br>
        <span class="fz20">Quote: {{ $player->quote }}</span><br>
    </div>
</div>
@endforeach

@endsection

@section('scripts')
    <script src="{{ mix('js/player-profile.js') }}"></script>
@endsection
