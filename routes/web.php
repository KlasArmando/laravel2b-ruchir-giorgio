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

Route::get('/', 'AlbumController@index');
Route::get('/album', 'ChrllController@album');
Route::get('/albums', 'AlbumController@albums');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/createAlbum', 'AlbumController@createAlbum');
Route::post('/createAlbum', 'AlbumController@storeAlbum');

Route::get('/album/{id}', 'AlbumController@viewAlbum');
Route::get('/editAlbum/{id}', 'AlbumController@editAlbum');
Route::put('/editAlbum/{id}/edit', 'AlbumController@updateAlbum');
