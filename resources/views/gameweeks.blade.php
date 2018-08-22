@extends('layouts.main')

@section('title', 'tester')

@section('styles')
    @parent
@endsection

@section('content')

@foreach($gameweeks as $gameweek)
    <a href="/team-sheet/{$gameweek->gameweek}">Gameweek {{ $gameweek->gameweek }}</a>
@endforeach

@endsection

@section('scripts')

@endsection
