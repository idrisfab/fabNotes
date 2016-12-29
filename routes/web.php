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

Route::get('/notes', 'NotesController@index');
Route::post('/notes', 'NotesController@addNote');
//Route::delete('/notes', 'NotesController@deleteNote');
Route::delete('/notes', 'NotesController@deleteNote');

Auth::routes();

Route::get('/home', 'HomeController@index');
