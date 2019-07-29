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

//for index
Route::get('/', "UrlPageController@index");
Route::get('/index', "UrlPageController@index");
Route::get('/inicio', "UrlPageController@index");

//for trailers
Route::get('/trailers', "UrlPageController@trailers");

//for contacto
Route::get('/contacto', "UrlPageController@contacto");

//for login
Route::get('/login', "UrlPageController@login");

