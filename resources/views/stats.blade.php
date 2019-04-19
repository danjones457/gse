@extends('layouts.main')

@section('title', 'GSE | Stats')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/stats.css') }}" type="text/css">
@endsection

@section('content')

<div class="tac">
    <span class="tdu fz30">{{ $season }} stats</span>
</div>
<div class="w100p flex">
    <div class="flex stats-container mla mra">
        @if(count($goalscorers) > 0)
            <div class="pr1 pt2">
                <div class="fz30 pb1 pl1 tac">
                    Goalscorers
                </div>
                <div class="fz25 flex fd-c pl1">
                    @foreach($goalscorers as $goalscorer)
                        <div>
                            <span>{{ $goalscorer[1]->firstname }} {{ $goalscorer[1]->lastname }} &ThickSpace;</span>
                            <span class="fr">{{ $goalscorer[0]->goals }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if(count($keepers) > 0)
            <div class="pr1 pt2">
                <div class="fz30 pb1 pl1 tac">
                    Clean sheets
                </div>
                <div class="fz25 flex fd-c pl1">
                    @foreach($keepers as $keeper)
                        <div>
                            <span>{{ $keeper[1]->firstname }} {{ $keeper[1]->lastname }} &ThickSpace;</span>
                            <span class="fr">{{ $keeper[0]->clean_sheets }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if(count($assists) > 0)
            <div class="pr1 pt2">
                <div class="fz30 pb1 pl1 tac">
                    Assists
                </div>
                <div class="fz25 flex fd-c pl1">
                    @foreach($assists as $assist)
                        <div>
                            <span>{{ $assist[1]->firstname }} {{ $assist[1]->lastname }} &ThickSpace;</span>
                            <span class="fr">{{ $assist[0]->assists }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if(count($yellow_cards) > 0)
            <div class="pr1 pt2">
                <div class="fz30 pb1 pl1 tac">
                    Yellow Cards
                </div>
                <div class="fz25 flex fd-c pl1">
                    @foreach($yellow_cards as $yellowCard)
                        <div>
                            <span>{{ $yellowCard[1]->firstname }} {{ $yellowCard[1]->lastname }} &ThickSpace;</span>
                            <span class="fr">{{ $yellowCard[0]->yellow_cards }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if(count($red_cards) > 0)
            <div class="pr1 pt2">
                <div class="fz30 pb1 pl1 tac">
                    Red Cards
                </div>
                <div class="fz25 flex fd-c pl1">
                    @foreach($red_cards as $redCard)
                        <div>
                            <span>{{ $redCard[1]->firstname }} {{ $redCard[1]->lastname }} &ThickSpace;</span>
                            <span class="fr">{{ $redCard[0]->red_cards }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if(count($goalsPerGame) > 0)
            <div class="pr1 pt2">
                <div class="fz30 pb1 pl1 tac">
                    Goals per game
                </div>
                <div class="fz25 flex fd-c pl1">
                    @foreach($goalsPerGame as $key => $value)
                        <div>
                            <span>{{ $key }} &ThickSpace;</span>
                            <span class="fr">{{ $value }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if(count($assistsPerGame) > 0)
            <div class="pr1 pt2">
                <div class="fz30 pb1 pl1 tac">
                    Assists per game
                </div>
                <div class="fz25 flex fd-c pl1">
                    @foreach($assistsPerGame as $key => $value)
                        <div>
                            <span>{{ $key }} &ThickSpace;</span>
                            <span class="fr">{{ $value }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</div>

<div class="pt1 pb1 tac flex fz30">
    <div class="mla pr1">
        <span class="text-grey bold">Total goals</span><br>
        <span>{{ $totalGoals }}</span>
    </div>
    <div class="mra">
        <span class="text-grey bold">Total assists</span><br>
        <span>{{ $totalAssists }}</span>
    </div>
</div>


@endsection

@section('scripts')
    @parent
@endsection
