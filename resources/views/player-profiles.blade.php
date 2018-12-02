@extends('layouts.main')

@section('title', 'Player profiles')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/player-profile.css') }}" type="text/css">
@endsection

@section('content')

@foreach($players as $player)
    <div class="card-container flex">
        <a style="width:100%;height:100%" href="/player-profile/{{ $player->id }}">
            <!-- Photo -->
            <img src="{{ asset('images/Final/'.$player->photo_url.'.JPG') }}" alt="" class="border-radius-50p card-image"><br>
            <!-- Name -->
            <span class="card-name fz20">{{ $player->firstname }} {{ $player->lastname }}</span><br>
        </a>
    </div>
@endforeach

@endsection

@section('scripts')
    @parent
@endsection
