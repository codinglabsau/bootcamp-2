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

//Route::resource('index', 'indexController');
//Route::resource('index', 'indexController')->only([
//    'index', 'show'
//]);
//Route::resource('movie', 'MovieController')->only([
//    'index', 'show'
//]);

Route::get('/', 'indexController@index');

//Route::get('/actors', function () {
//    return view('actors');
//});

Route::get('/movies', 'MovieController@index')->name('movies.index');;
Route::get('/movies/{id}', 'MovieController@show');

Route::get('/actors', 'ActorController@index')->name('actors.index');
Route::get('/actors/{id}', 'ActorController@show');

Route::get('/search', function () {
    return view('search');
});


