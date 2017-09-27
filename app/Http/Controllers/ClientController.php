<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{

}

//Content pages
Route::get('/','ContentController@home');
Route::get('/home','ContentController@home');
Route::get('/about','ContentController@about');
Route::get('/gallery','ContentController@gallery');
Route::get('/news','ContentController@news');

//Clients pages
Route::get('/contact','ClientController@contact');
Route::get('/classes/kid','ClientController@kidclass');
Route::get('/classes/adult','ClientController@kidclass');