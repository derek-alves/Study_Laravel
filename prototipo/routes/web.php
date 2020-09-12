<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/imoveis','App\Http\Controllers\PropertyController@index');

Route::get('/imoveis/novo','App\Http\Controllers\PropertyController@create');
Route::post('/imoveis/store','App\Http\Controllers\PropertyController@store');