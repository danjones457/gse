<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PlayerProfileController extends Controller
{
    public function index()
    {
        $players = DB::table('players')->get();

        return view('player-profiles', ['players' => $players]);
    }

    public function player($player)
    {
        $player = DB::table('players')->where('id', $player)->get();

        return view('player-profile', ['player' => $player]);
    }
}
