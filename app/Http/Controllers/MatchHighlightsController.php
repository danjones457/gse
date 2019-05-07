<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MatchHighlightsController extends Controller
{
    public function index()
    {
        return view('match-highlights/team-picker');
    }

    public function seasons($team)
    {
        $seasons = DB::table('videos')->distinct()->where('team', $team)->orderBy('season')->pluck('season');
        return view('match-highlights/season-picker', ['seasons' => $seasons, 'team' => $team]);
    }

    public function game($team, $season)
    {
        $weeks = DB::table('videos')->distinct()->where('team', $team)->where('season', $season)->orderBy('week')->select('week', 'team_played')->get();
        return view('match-highlights/game-picker', ['season' => $season, 'team' => $team, 'weeks' => $weeks]);
    }

    public function video($team, $season, $week)
    {
        $video = DB::table('videos')->distinct()->where('team', $team)->where('season', $season)->where('week', $week)->orderBy('week')->pluck('video_url');
        return view('match-highlights/video', ['video' => $video]);
    }
}
