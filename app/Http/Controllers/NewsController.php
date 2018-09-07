<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->get();
        return view('news', ['theNews' => $news]);
    }

    public function getNews($newsId)
    {
        $article = DB::table('news')->where('id', $newsId)->get();
        return view('news-article', ['article' => $article->first()]);
    }
}
