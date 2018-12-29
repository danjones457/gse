@extends('layouts.main')

@section('title', 'Glyn Street Elite')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/match-highlights.css') }}" type="text/css">
@endsection

@section('content')

<a class="block-selection" href="/match-highlights/1">1st Team</a>
<a class="block-selection" href="/match-highlights/2">U12s</a>

@endsection

@section('scripts')
    @parent
@endsection
