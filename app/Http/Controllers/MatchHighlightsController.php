<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchHighlightsController extends Controller
{
    public function index()
    {
        return view('match-highlights');
    }
}
