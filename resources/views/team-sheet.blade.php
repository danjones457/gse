@extends('layouts.main')

@section('title', 'tester')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/team-sheet.css') }}" type="text/css">
@endsection

@section('content')
<div class="page-container">
    <div class="team-title fz30">
        {{ $gameweek }}
    </div>
    @foreach($teams as $team)
        <div class="team-title fz30">
            {{ $team[7] }}
        </div>
        <div class="team-container">
            <div class="player-container GK">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[0] }}</span>
            </div>
            <div class="player-container LB">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[1] }}</span>
            </div>
            <div class="player-container RB">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[2] }}</span>
            </div>
            <div class="player-container CM">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[3] }}</span>
            </div>
            <div class="player-container RM">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[4] }}</span>
            </div>
            <div class="player-container LM">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[5] }}</span>
            </div>
            <div class="player-container ST">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[6] }}</span>
            </div>
        </div>
    @endforeach
</div>

@endsection

@section('scripts')

@endsection
