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

Route::get('/', 'WeightDataController@index');
Route::post('/runs/create', 'RunController@create');
Route::get('/runs/delete/{id}', 'RunController@destroy');
Route::get('/runs', 'RunController@index');