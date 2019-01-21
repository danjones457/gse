<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FixturesController extends Controller
{
    public function index()
    {
        return view('fixtures');
    }
}
