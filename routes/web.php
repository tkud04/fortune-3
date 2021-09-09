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

Route::get('/', 'MainController@getIndex');
Route::get('services', 'MainController@getServices');
Route::get('service-{s}', 'MainController@getService');
Route::get('about', 'MainController@getAbout');

Route::get('zohoverify/{nn}', 'MainController@getZoho');
