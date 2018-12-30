<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PlayerProfileController extends Controller
{
    public function index()
    {
        $players = DB::table('players')->get();
        $ogPlayers = DB::table('og_players')->get();

        return view('player-profiles', ['players' => $players, 'ogPlayers' => $ogPlayers]);
    }

    public function player($playerId)
    {
        $player = DB::table('players')->where('id', $playerId)->get();

        $awards = DB::table('awards')->where('player_id', $playerId)->get();

        $stats = DB::table('stats')->where('player_id', $playerId)->where('season', 2)->get();

        return view('player-profile', ['player' => $player, 'awards' => $awards->first() == [] ? [] : $awards, 'stats' => $stats->first() == [] ? [] : $stats]);
    }
}
