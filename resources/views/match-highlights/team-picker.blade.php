@extends('layouts.main')

@section('title', 'GSE | Highlights')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/match-highlights.css') }}" type="text/css">
@endsection

@section('content')

<div class="pt1 pb1">
    <a class="block-selection mb1" href="/match-highlights/1">1st Team</a>
    <a class="block-selection" href="/match-highlights/2">U12s</a>
</div>

@endsection

@section('scripts')
    @parent
@endsection
