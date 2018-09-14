@extends('layouts.main-black')

@section('title', 'Player profiles')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/stats.css') }}" type="text/css">
@endsection

@section('content')

<div class="text-yellow fz30 pb1 pl1">
    Goalscorers
</div>
<div class="text-yellow fz25 flex fd-c pl1">
    @foreach($stats as $stat)
        <div>
            <span>{{ $stat[1]->firstname }} {{ $stat[1]->lastname }} &ThickSpace;</span>
            <span>{{ $stat[0]->goals }}</span>
        </div>
    @endforeach
</div>

@endsection

@section('scripts')
    @parent
@endsection
