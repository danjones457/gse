@extends('layouts.main')

@section('title', 'Glyn Street Elite')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/gameweeks.css') }}" type="text/css">
@endsection

@section('content')

<div class="pt1 pb1">
    @foreach($gameweeks as $gameweek)
        <a class="gameweek" href="/team-sheet/{{$gameweek->gameweek}}">Gameweek {{ $gameweek->gameweek }}</a>
    @endforeach
</div>

@endsection

@section('scripts')
    @parent
@endsection
