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

Route::match(['post','get'],'/', 'mainController@main');
Route::get('/moderator','mainController@moderator');
Route::get('/moderator/delete/{id}','mainController@delete')->where('id','[0-9]+');
Route::match(['post','get'],'/moderator/edit/{id}','mainController@edit')->where('id','[0-9]+');
Route::get('/moderator/deleted-post','mainController@deletedPost');
Route::get('/moderator/deleted-post/del/{id}','mainController@endDelete')->where('id','[0-9]+');
Route::get('/moderator/deleted-post/recovery/{id}','mainController@recovery')->where('id','[0-9]+');
