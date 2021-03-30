<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return view('adminLTE.ruteslash');
});

Route::get('/register', 'AuthController@register');

Route::post('/welcome', 'AuthController@welcome');

Route::get('DataTable', function(){
    return view('adminLTE.ruteDataTable');
});

Route::get('/pertanyaan', 'PertanyaanController@index');

Route::get('/pertanyaan/create', 'PertanyaanController@createPertanyaan');

Route::post('/pertanyaan/store', 'PertanyaanController@store');

Route::get('pertanyaan/edit/{id}', 'PertanyaanController@edit');

Route::put('pertanyaan/update', "PertanyaanController@update");

Route::delete('pertanyaan/destroy/{id}', 'PertanyaanController@destroy');

Route::get('pertanyaan/{id}', 'PertanyaanController@show');

