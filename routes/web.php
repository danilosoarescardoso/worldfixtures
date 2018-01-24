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

Route::get('/', 'CompetitionsController@listLeagues');
Route::get('/competitions/details/{id?}', 'CompetitionsController@competitionDetails');
Route::get('/competitions/table/{id?}', 'CompetitionsController@competitionTable');
