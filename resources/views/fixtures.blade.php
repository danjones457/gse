@extends('layouts.main')

@section('title', 'GSE | Fixtures')

@section('styles')
    @parent
@endsection

@section('content')

<h1 class="tac pt1 fz40">Next weeks fixtures</h1>
<div class="w100p tac pt1">
    <div style="display:inline-block">
        <div id="lrep709843490" style="width: 350px;">Data loading....<a href="http://cardiffimg7as.leaguerepublic.com/l/fg/1_613026780.html">click here for Premier League</a><br/><br/><a href="http://www.leaguerepublic.com">LeagueRepublic</a></div>
        <script language="javascript" type="text/javascript">
        var lrcode = '709843490'
        </script>
        <script language="Javascript" type="text/javascript" src="https://api.leaguerepublic.com/l/client/api/cs1.js"></script>
    </div>
</div>


@endsection

@section('scripts')
    @parent
@endsection
