@extends('layouts.main')

@section('title', 'GSE | Highlights')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/match-highlights.css') }}" type="text/css">
@endsection

@section('content')

<div class="pt1 pb1">
    @foreach($weeks as $week)
        <a class="block-selection mb1" href="/match-highlights/{{$team}}/{{$season}}/{{$week->week}}">{{$week->team_played}} (GW{{$week->week}})</a>
    @endforeach
</div>

@endsection

@section('scripts')
    @parent
@endsection
