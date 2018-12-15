<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StatsController extends Controller
{
    public function index()
    {
        $seasons = DB::table('stats')->distinct()->get(['season']);

        return view('season-stats', ['seasons' => $seasons]);
    }


    public function season(Request $request)
    {
        $players = DB::table('players')->select('id', 'firstname', 'lastname')->get();

        $season = $request->season != 'all-time' ? [$request->season] : [1, 2];

        $goalscorers = $this->getStat('goals', $season);
        $keepers = $this->getStat('clean_sheets', $season);
        $assists = $this->getStat('assists', $season);
        $yellowCards = $this->getStat('yellow_cards', $season);
        $redCards = $this->getStat('red_cards', $season);

        $goalScorersReturn = [];
        for ($i=0; $i < count($goalscorers); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($goalscorers[$i]->player_id == $players[$j]->id) {
                    array_push($goalScorersReturn, [$goalscorers[$i], $players[$j]]);
                }
            }
        }

        $keepersReturn = [];
        for ($i=0; $i < count($keepers); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($keepers[$i]->player_id == $players[$j]->id) {
                    array_push($keepersReturn, [$keepers[$i], $players[$j]]);
                }
            }
        }

        $assistsReturn = [];
        for ($i=0; $i < count($assists); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($assists[$i]->player_id == $players[$j]->id) {
                    array_push($assistsReturn, [$assists[$i], $players[$j]]);
                }
            }
        }

        $yellowCardsReturn = [];
        for ($i=0; $i < count($yellowCards); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($yellowCards[$i]->player_id == $players[$j]->id) {
                    array_push($yellowCardsReturn, [$yellowCards[$i], $players[$j]]);
                }
            }
        }

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

    public function getStat($stat, $season)
    {
        return DB::table('stats')
            ->whereIn('season', $season)
            ->whereNotNull($stat)
            ->orderBy($stat, 'desc')
            ->groupBy('player_id')
            ->selectRaw('sum('.$stat.') as '.$stat.', player_id')
            ->get();
    }
}
