@extends('layouts.main')

@section('title', 'Glyn Street Elite')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/match-highlights.css') }}" type="text/css">
@endsection

@section('content')

@foreach($seasons as $season)
    <a class="block-selection" href="/match-highlights/{{$team}}/{{$season}}">Season {{$season}}</a>
@endforeach

@endsection

@section('scripts')
    @parent
@endsection
