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

Route::get('/', 'NavController@home');
Route::get('/addAnimal', 'NavController@addAnimal' );
Route::get('/addSpecie', 'NavController@addSpecie' );

Route::post('/addSpecie', 'ActionController@addSpecie');
Route::post('/addAnimal', 'ActionController@addAnimal');

Route::post('/editAnimal', 'NavController@editAnimal');

Route::post('/editActionAnimal', 'ActionController@editAnimal');
Route::post('/editActionSpecie', 'ActionController@editSpecie');

Route::post('/suppAnimal', 'ActionController@suppAnimal');
Route::post('/suppSpecie', 'ActionController@suppSpecie');
