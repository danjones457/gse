@extends('layouts.main-black')

@section('title', 'Player profiles')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/stats.css') }}" type="text/css">
@endsection

@section('content')

<div class="w100p flex">
    <div class="flex stats-container mla mra">
        @if(count($goalscorers) > 0)
            <div class="pr1 pt2">
                <div class="text-yellow fz30 pb1 pl1 tac">
                    Goalscorers
                </div>
                <div class="text-yellow fz25 flex fd-c pl1">
                    @foreach($goalscorers as $goalscorer)
                        <div>
                            <span>{{ $goalscorer[1]->firstname }} {{ $goalscorer[1]->lastname }} &ThickSpace;</span>
                            <span>{{ $goalscorer[0]->goals }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if(count($keepers) > 0)
            <div class="pr1 pt2">
                <div class="text-yellow fz30 pb1 pl1 tac">
                    Clean sheets
                </div>
                <div class="text-yellow fz25 flex fd-c pl1">
                    @foreach($keepers as $keeper)
                        <div>
                            <span>{{ $keeper[1]->firstname }} {{ $keeper[1]->lastname }} &ThickSpace;</span>
                            <span>{{ $keeper[0]->clean_sheets }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if(count($assists) > 0)
            <div class="pr1 pt2">
                <div class="text-yellow fz30 pb1 pl1 tac">
                    Assists
                </div>
                <div class="text-yellow fz25 flex fd-c pl1">
                    @foreach($assists as $assist)
                        <div>
                            <span>{{ $assist[1]->firstname }} {{ $assist[1]->lastname }} &ThickSpace;</span>
                            <span>{{ $assist[0]->assists }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if(count($yellow_cards) > 0)
            <div class="pr1 pt2">
                <div class="text-yellow fz30 pb1 pl1 tac">
                    Yellow Cards
                </div>
                <div class="text-yellow fz25 flex fd-c pl1">
                    @foreach($yellow_cards as $yellowCard)
                        <div>
                            <span>{{ $yellowCard[1]->firstname }} {{ $yellowCard[1]->lastname }} &ThickSpace;</span>
                            <span>{{ $yellowCard[0]->yellow_cards }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if(count($red_cards) > 0)
            <div class="pr1 pt2">
                <div class="text-yellow fz30 pb1 pl1 tac">
                    Red Cards
                </div>
                <div class="text-yellow fz25 flex fd-c pl1">
                    @foreach($red_cards as $redCard)
                        <div>
                            <span>{{ $redCard[1]->firstname }} {{ $redCard[1]->lastname }} &ThickSpace;</span>
                            <span>{{ $redCard[0]->red_cards }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</div>

@endsection

@section('scripts')
    @parent
@endsection
