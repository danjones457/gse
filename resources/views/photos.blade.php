@extends('layouts.main-black')

@section('title', 'GSE | Photos')

@section('styles')
    @parent
@endsection

@section('content')

<div>
    <!-- SnapWidget -->
    <script src="https://snapwidget.com/js/snapwidget.js"></script>
    <iframe src="https://snapwidget.com/embed/640115" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
</div>

@endsection

@section('scripts')
    @parent
@endsection
