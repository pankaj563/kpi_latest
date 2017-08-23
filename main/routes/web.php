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

Route::get('/',array('as'=>'login','uses'=>'userController@login'));
Route::get('login',array('as'=>'login','uses'=>'userController@login'));
Route::post('login',array('as'=>'login','uses'=>'userController@postLogin'));

Route::get('dashboard',array('as'=>'dashboard','uses'=>'userController@dashboard'));
Route::post('dashboard',array('as'=>'dashboard','uses'=>'userController@dashboard'));

Route::get('logout',array('as'=>'logout','uses'=>'userController@logout'));
Route::post('logout',array('as'=>'logout','uses'=>'userController@logout'));