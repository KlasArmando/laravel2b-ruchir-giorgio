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

//Route::get('/', 'AlbumController@index');
//Route::get('/album', 'ChrllController@album');
//Route::get('/albums', 'Album1Controller@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/contact', 'ChrllController@contact');

Route::resource('/albums','Album1Controller');
Route::resource('/','Album1Controller');

Route::resource('/genres', 'GenreController');