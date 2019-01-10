@extends('layouts.main-black')

@section('title', 'GSE | Player profiles')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/player-profile.css') }}" type="text/css">
@endsection

@section('content')

@foreach($player as $player)
<div class="profile-container flex flex-wrap-wrap">
    <div class="pl1 pt1 pr1 col-lg-4 profile-image-container">
        <img src="{{ asset('images/Final/'.$player->photo_url.'.JPG') }}" alt="" class="profile-image">
        <div class="player-details">
            <span class="fz55">{{ $player->firstname}} {{ $player->lastname }} @if($player->shirt_number != null)#{{ $player->shirt_number }}@endif</span><br>
            <span class="fz20">D.O.B: {{ $player->dob }}</span><br>
            <span class="fz20">Positions: {{ $player->positions }}</span><br>
        </div>
    </div>
    <div class="p1 mla profile-text">
        <span class="fz20">Bio: {{ $player->description }}</span><br>
        <span class="fz20">Quote: {{ $player->quote }}</span><br>
    </div>
    <div class="p1 tac w100p">
        <div class="other pr1">
            @if($awards != [])
                <span class="fz25 tdu">Awards</span>
                @foreach($awards as $award)
                    <div class="fz20">
                        <span>{{ $award->award }}</span>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="other pl1 fz20">
            @if($stats != [])
                <span class="fz25 tdu">Stats</span><br>
                @if($stats[0]->goals != null)
                    <span>Goals: </span><span>{{ $stats[0]->goals }}</span><br>
                @endif
                @if($stats[0]->assists != null)
                    <span>Assists: </span><span>{{ $stats[0]->assists }}</span><br>
                @endif
                @if($stats[0]->clean_sheets != null)
                    <span>Clean sheets: </span><span>{{ $stats[0]->clean_sheets }}</span><br>
                @endif
                @if($stats[0]->yellow_cards != null)
                    <span>Yellow cards: </span><span>{{ $stats[0]->yellow_cards }}</span><br>
                @endif
                @if($stats[0]->red_cards != null)
                    <span>Red cards: </span><span>{{ $stats[0]->red_cards }}</span><br>
                @endif
            @endif
        </div>
    </div>
</div>
@endforeach

@endsection

@section('scripts')
    @parent
    <script src="{{ mix('js/player-profile.js') }}"></script>
@endsection
