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

Route::get('/','ImenikController@index');
Route::get('/grafikon','ImenikController@grafikon');
//Route::get('/pretraga','ImenikController@pretraga');
Route::get('/mapa','ImenikController@mapa');
Route::get('/search', 'ImenikController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
