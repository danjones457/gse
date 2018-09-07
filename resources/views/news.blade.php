@extends('layouts.main')

@section('title', 'Glyn Street Elite')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/news.css') }}" type="text/css">
@endsection

@section('content')
    @foreach($theNews as $news)
        <a class="news-selection" href="/news/{{$news->id}}">
            {{ $news->title }}
        </a>
    @endforeach
@endsection

@section('scripts')

@endsection
