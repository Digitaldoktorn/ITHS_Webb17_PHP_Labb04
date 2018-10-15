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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/media/{medium}', 'MediaController@show');
Route::get('/media', 'MediaController@index');
Route::get('/media/create', 'MediaController@create');
Route::post('/media', 'MediaController@store');
Route::get('/genres', 'GenreController@index');
Route::get('/genres/{genre}', 'GenreController@show');
Route::get('/reviews', 'ReviewController@index');
Route::get('/reviews/{review}', 'ReviewController@show');


Route::resource('/media', 'MediaController');
Route::resource('/genres', 'GenreController');
Route::resource('/reviews', 'ReviewController');
