@extends('layouts.main')

@section('title', 'Glyn Street Elite')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/gameweeks.css') }}" type="text/css">
@endsection

@section('content')

@foreach($gameweeks as $gameweek)
    <a class="gameweek" href="/team-sheet/{{$gameweek->gameweek}}">Gameweek {{ $gameweek->gameweek }}</a>
@endforeach

@endsection

@section('scripts')
    @parent
@endsection
