<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TeamSheetsController extends Controller
{
    public function index()
    {
        $gameweeks = DB::table('teams')->distinct()->get(['gameweek']);

        return view('gameweeks', ['gameweeks' => $gameweeks]);
    }

    public function team($gameweek)
    {
        $players = DB::table('players')->get();

        $teams = DB::table('teams')->where('gameweek', $gameweek)->get();

        $team1 = [];
        $team2 = [];

        for ($i=0; $i < count($teams); $i++) {
            for ($j=0; $j < count($players); $j++) {
                if ($teams[$i]->player_id == $players[$j]->id) {
                    if ($teams[$i]->team_id == 1) {
                        array_push($team1, $players[$j]);
                    } else {
                        array_push($team2, $players[$j]);
                    }
                }
            }
        }
        array_push($team1, 'Glyn Street Elite');
        array_push($team2, "Glyn Street Elite U12's");
        $teams = [];
        array_push($teams, $team1);
        array_push($teams, $team2);

        $teamNames = [];
        for ($i=0; $i < count($teams); $i++) {
            array_push($teamNames, $teams[$i][count($teams[$i]) - 1]);
        }
        return view('team-sheet', ['teams' => $teams, 'gameweek' => $gameweek, 'team_names' => $teamNames]);
    }
}
