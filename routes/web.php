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
Route::get('/team-sheets', 'TeamSheetsController@index')->name('team-sheets');
Route::get('/team-sheets/{gameweek}', 'TeamSheetsController@team')->name('team-sheet');
Route::get('/match-reports', 'MatchReportsController@index')->name('match-reports');
Route::get('/match-highlights', 'MatchHighlightsController@index')->name('match-highlights');
Route::get('/news', 'NewsController@index')->name('news');

// Player profile routes
Route::get('/player-profiles', 'PlayerProfileController@index')->name('player-profiles');
Route::get('/player-profile/{playerId}', 'PlayerProfileController@player')->name('player-profile');
