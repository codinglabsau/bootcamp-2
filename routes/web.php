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
use App\Movie;
use App\Actor;
use App\Quote;

Route::resource('movie', 'MovieController');

Route::get('/', 'MovieController@index');

Route::get('/actors', function () {
    return view('actors');
});

Route::get('/movies/{id}', 'MovieController@show');

Route::get('/search', function () {
    return view('search');
});
