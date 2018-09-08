@extends('layouts.main-black')

@section('title', 'Glyn Street Elite')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/news.css') }}" type="text/css">
@endsection

@section('content')
    <div class="news-article">
        <div class="title">
            {{ $article->title }}
        </div>
        <div class="header">
            {{ $article->header }}
        </div>
        <div class="body">
            {{ $article->body }}
        </div>
    </div>
@endsection

@section('scripts')

@endsection
