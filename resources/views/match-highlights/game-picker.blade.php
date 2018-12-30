@extends('layouts.main')

@section('title', 'GSE | Highlights')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/match-highlights.css') }}" type="text/css">
@endsection

@section('content')

@foreach($weeks as $week)
    <a class="block-selection" href="/match-highlights/{{$team}}/{{$season}}/{{$week}}">Gameweek {{$week}}</a>
@endforeach

@endsection

@section('scripts')
    @parent
@endsection
