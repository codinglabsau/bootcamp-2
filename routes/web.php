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

Route::resource('movie', 'MovieController');

Route::get('/', function () {
    $movies = Movie::all();
    $actors = Actor::all();
    return view('index')->with('movies', $movies)->with('actors', $actors);
    //dd($movies);

    //return view('index');
});

Route::get('/actors', function () {
    return view('actors');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/search', function () {
    return view('search');
});
