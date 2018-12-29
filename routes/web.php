<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/team-sheets', 'TeamSheetsController@index')->name('team-sheets');
// Route::get('/team-sheet/{gameweek}', 'TeamSheetsController@team')->name('team-sheet');
Route::get('/league-table', 'MatchReportsController@index')->name('match-reports');

Route::get('/match-highlights', 'MatchHighlightsController@index')->name('match-highlights');
Route::get('/match-highlights/{team}', 'MatchHighlightsController@seasons');
Route::get('/match-highlights/{team}/{season}', 'MatchHighlightsController@game');
Route::get('/match-highlights/{team}/{season}/{week}', 'MatchHighlightsController@video');

// Player profile routes
Route::get('/player-profiles', 'PlayerProfileController@index')->name('player-profiles');
Route::get('/player-profile/{playerId}', 'PlayerProfileController@player')->name('player-profile');

// News routes
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/{newsId}', 'NewsController@getNews');

Route::get('/stats', 'StatsController@index');
Route::get('/stats/{season}', 'StatsController@season')->name('stats');

Route::get('/awards', 'AwardsController@index')->name('awards');

Route::get('/photos', 'PhotoController@index')->name('photos');
