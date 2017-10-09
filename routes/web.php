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

//Content pages
Route::get('/','ContentController@home');
Route::get('/home','ContentController@home');
Route::get('/about','ContentController@about');
Route::get('/gallery','ContentController@gallery');
Route::get('/news','ContentController@news');
Route::get('/contact','ClientController@contact');
Route::get('/classes','ClientController@classes');
