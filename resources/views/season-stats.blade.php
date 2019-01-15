@extends('layouts.main')

@section('title', 'GSE | Stats')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/stats.css') }}" type="text/css">
@endsection

@section('content')

<div class="pt1 pb1">
    <a class="season" href="/stats/all-time">All time</a>
    @foreach($seasons as $season)
        <a class="season" href="/stats/{{$season->season}}">Season {{ $season->season }}</a>
    @endforeach
</div>

@endsection

@section('scripts')
    @parent
@endsection
