@extends('layouts.main-black')

@section('title', 'Awards')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/awards.css') }}" type="text/css">
@endsection

@section('content')

@foreach($awards as $award)
    <div class="flex tac pt1">
        <div class="w50p tar">
            <img src="{{ asset('images/Final/'.$award[0]->photo_url.'.JPG') }}" alt="" class="award-photo">
        </div>
        <div class="w50p tal text-yellow pl-1-2">
            <span class="tdu fz30 pb1">{{ $award[0]->firstname }} {{ $award[0]->lastname }}</span><br />
            @for($i = 0; $i < count($award) - 1; $i++)
                <span class="fz20">{{ $award[$i + 1]->award }}</span><br />
            @endfor
        </div>
    </div>
@endforeach

@endsection

@section('scripts')
    @parent
@endsection
