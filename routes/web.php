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

Route::view('/', 'welcome');
Auth::routes();
Route::get('/home', 'HomeController@index')    
    ->name('home');
Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/media/{medium}', 'MediaController@show');
Route::get('/media', 'MediaController@index');
Route::get('/media/create', 'MediaController@create');
Route::post('/media', 'MediaController@store');
//Route::get('/genres', 'GenreController@index');
//Route::get('/genres/{genre}', 'GenreController@show');
Route::get('/reviews', 'ReviewController@index');
Route::get('/reviews/{review}', 'ReviewController@show');


Route::resource('/media', 'MediaController');
Route::resource('/genres', 'GenreController');
Route::resource('/reviews', 'ReviewController');


//Route::get('/uploadfile', 'UploadfileController@index');
//Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');
Route::get('/users', 'UsersController@index');

// Anders added these:
Route::get('/media', 'MediaController@loggedIn');
Route::get('/genres', 'GenreController@loggedIn');
Route::get('/reviews', 'ReviewController@loggedIn');
Route::get('/users', 'UsersController@loggedIn');



