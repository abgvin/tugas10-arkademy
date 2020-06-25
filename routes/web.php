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

// Index
Route::get('/', 'ProductController@index');

// Tambah Data
Route::get('/create', 'ProductController@create');

// Save Data
Route::post('/store', 'ProductController@store');

// Delete Data
Route::get('/destroy/{id}', 'ProductController@destroy');

// Edit Data
Route::get('/edit/{id}', 'ProductController@edit');

Route::post('/update/{id}', 'ProductController@update');
