<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StatsController extends Controller
{
    public function index()
    {
        $seasons = DB::table('stats')->distinct()->get(['season']);

        $statsData = DB::table('stats')->get();

        $totalGoals = 0;
        $totalAssists = 0;

        foreach ($statsData as $key => $data) {
            $totalGoals += $data->goals;
            $totalAssists += $data->assists;
        }

        return view('season-stats', ['seasons' => $seasons, 'totalGoals' => $totalGoals, 'totalAssists' => $totalAssists]);
    }


    public function season(Request $request)
    {
        $players = DB::table('players')->select('id', 'firstname', 'lastname')->get();

        $season = $request->season != 'all-time' ? [$request->season] : [1, 2];
        $seasonReturn = $request->season != 'all-time' ? 'Season '.$request->season : 'All time';

        $goalscorers = $this->getStat('goals', $season);
        $keepers = $this->getStat('clean_sheets', $season);
        $assists = $this->getStat('assists', $season);
        $yellowCards = $this->getStat('yellow_cards', $season);
        $redCards = $this->getStat('red_cards', $season);
        $gamesPlayed = $this->getStat('games_played', $season);

        $totalGoals = 0;
        $totalAssists = 0;

        foreach ($goalscorers as $key => $value) {
            $totalGoals += $value->goals;
        }
        foreach ($assists as $key => $value) {
            $totalAssists += $value->assists;
        }

        $goalScorersReturn = [];
        for ($i=0; $i < count($goalscorers); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($goalscorers[$i]->player_id == $players[$j]->id) {
                    for ($k=0; $k < count($gamesPlayed); $k++) {
                        if ($gamesPlayed[$k]->player_id == $players[$j]->id) {
                            $goalscorers[$i]->goalsPerGame = round(($goalscorers[$i]->goals / $gamesPlayed[$k]->games_played), 2);
                        }
                    }
                    array_push($goalScorersReturn, [$goalscorers[$i], $players[$j]]);
                }
            }
        }

        $goalsPerGame = [];
        for ($i=0; $i < count($goalScorersReturn); $i++) {
            $goalsPerGame[$goalScorersReturn[$i][1]->firstname.' '.$goalScorersReturn[$i][1]->lastname] = $goalScorersReturn[$i][0]->goalsPerGame;
        }
        arsort($goalsPerGame);


        $assistsReturn = [];
        for ($i=0; $i < count($assists); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($assists[$i]->player_id == $players[$j]->id) {
                    for ($k=0; $k < count($gamesPlayed); $k++) {
                        if ($gamesPlayed[$k]->player_id == $players[$j]->id) {
                            $assists[$i]->assistsPerGame = round(((int) $assists[$i]->assists / (int) $gamesPlayed[$k]->games_played), 2);
                        }
                    }
                    array_push($assistsReturn, [$assists[$i], $players[$j]]);
                }
            }
        }

        $assistsPerGame = [];
        for ($i=0; $i < count($assistsReturn); $i++) {
            $assistsPerGame[$assistsReturn[$i][1]->firstname.' '.$assistsReturn[$i][1]->lastname] = $assistsReturn[$i][0]->assistsPerGame;
        }
        arsort($assistsPerGame);

        $keepersReturn = [];
        for ($i=0; $i < count($keepers); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($keepers[$i]->player_id == $players[$j]->id) {
                    array_push($keepersReturn, [$keepers[$i], $players[$j]]);
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

        return view('stats', [
            "goalscorers" => $goalScorersReturn,
            "keepers" => $keepersReturn,
            "assists" => $assistsReturn,
            "yellow_cards" => $yellowCardsReturn,
            "red_cards" => $redCardsReturn,
            "season" => $seasonReturn,
            "totalGoals" => $totalGoals,
            "totalAssists" => $totalAssists,
            "goalsPerGame" => $goalsPerGame,
            "assistsPerGame" => $assistsPerGame
        ]);
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
