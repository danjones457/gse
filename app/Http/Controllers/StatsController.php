<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StatsController extends Controller
{
    public function index()
    {
        $players = DB::table('players')->select('id', 'firstname', 'lastname')->get();
        $goalscorers = DB::table('goalscorers')->orderBy('goals', 'desc')->get();

        $stats = [];

        for ($i=0; $i < count($goalscorers); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($goalscorers[$i]->player_id == $players[$j]->id) {
                    array_push($stats, [$goalscorers[$i], $players[$j]]);
                }
            }
        }
        return view('stats', ["stats" => $stats]);
    }
}
