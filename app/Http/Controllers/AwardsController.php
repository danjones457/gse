<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AwardsController extends Controller
{
    public function index()
    {
        $awards = DB::table('awards')->get();

        $players = DB::table('players')->get();

        $tempAwards = [];

        foreach ($players as $key => $player) {
            $tempAwards[$player->id] = [$player];
        }

        foreach ($awards as $key => $award) {
            array_push($tempAwards[$award->player_id], $award);
        }

        return view('awards', ['awards' => $tempAwards]);
    }
}
