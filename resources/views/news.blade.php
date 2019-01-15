@extends('layouts.main')

@section('title', 'GSE | News')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/news.css') }}" type="text/css">
@endsection

@section('content')
    <div class="pt1 pb1">
        @foreach($theNews as $news)
            <a class="news-selection mb1" href="/news/{{$news->id}}">
                {{ $news->title }}
            </a>
        @endforeach
    </div>
@endsection

@section('scripts')
    @parent
@endsection
