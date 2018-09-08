@extends('layouts.main-black')

@section('title', 'Glyn Street Elite')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/news.css') }}" type="text/css">
@endsection

@section('content')
    <div class="">
        <a class="btn ml1 mt1 clickable" href="/news"><i class="fa fa-chevron-left" aria-hidden="true"></i>&ThickSpace;&ThickSpace;Back to news</a>
    </div>
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
    @parent
@endsection
