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
        <div class="other pl1 pr1 fz20">
            @if($overallStats['notEmpty'])
                <span class="fz25 tdu">Overall Stats</span><br>
                @if($overallStats['goals'] != null)
                    <span>Goals: </span><span>{{ $overallStats['goals'] }}</span><br>
                @endif
                @if($overallStats['assists'] != null)
                    <span>Assists: </span><span>{{ $overallStats['assists'] }}</span><br>
                @endif
                @if($overallStats['clean_sheets'] != null)
                    <span>Clean sheets: </span><span>{{ $overallStats['clean_sheets'] }}</span><br>
                @endif
                @if($overallStats['yellow_cards'] != null)
                    <span>Yellow cards: </span><span>{{ $overallStats['yellow_cards'] }}</span><br>
                @endif
                @if($overallStats['red_cards'] != null)
                    <span>Red cards: </span><span>{{ $overallStats['red_cards'] }}</span><br>
                @endif
            @endif
        </div>
        <div class="other pl1 pr1 fz20">
            @if($season1Stats != [])
                <span class="fz25 tdu">Season 1 Stats</span><br>
                @if($season1Stats->goals != null)
                    <span>Goals: </span><span>{{ $season1Stats->goals }}</span><br>
                @endif
                @if($season1Stats->assists != null)
                    <span>Assists: </span><span>{{ $season1Stats->assists }}</span><br>
                @endif
                @if($season1Stats->clean_sheets != null)
                    <span>Clean sheets: </span><span>{{ $season1Stats->clean_sheets }}</span><br>
                @endif
                @if($season1Stats->yellow_cards != null)
                    <span>Yellow cards: </span><span>{{ $season1Stats->yellow_cards }}</span><br>
                @endif
                @if($season1Stats->red_cards != null)
                    <span>Red cards: </span><span>{{ $season1Stats->red_cards }}</span><br>
                @endif
            @endif
        </div>
        <div class="other pl1 fz20">
            @if($season2Stats != [])
                <span class="fz25 tdu">Season 2 Stats</span><br>
                @if($season2Stats->goals != null)
                    <span>Goals: </span><span>{{ $season2Stats->goals }}</span><br>
                @endif
                @if($season2Stats->assists != null)
                    <span>Assists: </span><span>{{ $season2Stats->assists }}</span><br>
                @endif
                @if($season2Stats->clean_sheets != null)
                    <span>Clean sheets: </span><span>{{ $season2Stats->clean_sheets }}</span><br>
                @endif
                @if($season2Stats->yellow_cards != null)
                    <span>Yellow cards: </span><span>{{ $season2Stats->yellow_cards }}</span><br>
                @endif
                @if($season2Stats->red_cards != null)
                    <span>Red cards: </span><span>{{ $season2Stats->red_cards }}</span><br>
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
