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

        $stats = DB::table('stats')->where('player_id', $playerId)->get();
        $season1Stats = [];
        $season2Stats = [];
        $overallStats = [
            'goals' => 0,
            'assists' => 0,
            'clean_sheets' => 0,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'notEmpty' => false
        ];

        foreach ($stats as $season => $stat) {
            if ($stat->season == 1) {
                $season1Stats = $stat;
            }
            if ($stat->season == 2) {
                $season2Stats = $stat;
            }
            foreach ($stat as $key => $value) {
                if (isset($overallStats[$key])) {
                    $overallStats[$key] += $value;
                }
                if ($value > 0) {
                    $overallStats['notEmpty'] = true;
                }
            }
        }

        return view('player-profile', [
            'player' => $player,
            'awards' => $awards->first() == [] ? [] : $awards,
            'season1Stats' => $season1Stats,
            'season2Stats' => $season2Stats,
            'overallStats' => $overallStats
        ]);
    }
}
