<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchReportsController extends Controller
{
    public function index()
    {
        return view('match-reports');
    }
}
