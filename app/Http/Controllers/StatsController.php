<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StatsController extends Controller
{
    public function index()
    {
        $players = DB::table('players')->select('id', 'firstname', 'lastname')->get();

        $goalscorers = DB::table('stats')->whereNotNull('goals')->orderBy('goals', 'desc')->get();
        $goalScorersReturn = [];
        for ($i=0; $i < count($goalscorers); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($goalscorers[$i]->player_id == $players[$j]->id) {
                    array_push($goalScorersReturn, [$goalscorers[$i], $players[$j]]);
                }
            }
        }

        $keepers = DB::table('stats')->whereNotNull('clean_sheets')->orderBy('clean_sheets', 'desc')->get();
        $keepersReturn = [];
        for ($i=0; $i < count($keepers); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($keepers[$i]->player_id == $players[$j]->id) {
                    array_push($keepersReturn, [$keepers[$i], $players[$j]]);
                }
            }
        }

        $assists = DB::table('stats')->whereNotNull('assists')->orderBy('assists', 'desc')->get();
        $assistsReturn = [];
        for ($i=0; $i < count($assists); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($assists[$i]->player_id == $players[$j]->id) {
                    array_push($assistsReturn, [$assists[$i], $players[$j]]);
                }
            }
        }

        $yellowCards = DB::table('stats')->whereNotNull('yellow_cards')->orderBy('yellow_cards', 'desc')->get();
        $yellowCardsReturn = [];
        for ($i=0; $i < count($yellowCards); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($yellowCards[$i]->player_id == $players[$j]->id) {
                    array_push($yellowCardsReturn, [$yellowCards[$i], $players[$j]]);
                }
            }
        }

        $redCards = DB::table('stats')->whereNotNull('red_cards')->orderBy('red_cards', 'desc')->get();
        $redCardsReturn = [];
        for ($i=0; $i < count($redCards); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($redCards[$i]->player_id == $players[$j]->id) {
                    array_push($redCardsReturn, [$redCards[$i], $players[$j]]);
                }
            }
        }

        return view('stats', ["goalscorers" => $goalScorersReturn, "keepers" => $keepersReturn, "assists" => $assistsReturn, "yellow_cards" => $yellowCardsReturn, "red_cards" => $redCardsReturn]);
    }
}
