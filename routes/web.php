<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
});


Route::get('/', 'SerieController@index');
Route::get('/series/criar', 'SerieController@create');

Route::post('/series/criar', 'SerieController@store');