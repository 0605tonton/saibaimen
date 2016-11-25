<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// オーナートップページ
Route::get('/', 'Owner\OwnerController@index');

// ログイン
Route::get('owner/login', 'Owner\OwnerController@getLogin');
Route::post('owner/login', 'Owner\OwnerController@postLogin');

// ログアウト
Route::get('owner/logout', 'Owner\OwnerController@getLogout');

// ユーザ登録
Route::get('owner/register', 'Owner\OwnerController@getRegister');
Route::post('owner/register', 'Owner\OwnerController@postRegister');

// サンプルページ
Route::get('farmer/sample', 'Owner\OwnerController@getSample');

// ユーザトップ
Route::get('owner/mytop', 'Owner\OwnerController@getMytop');

// 日記
Route::get('owner/dialy', 'Owner\OwnerController@getDialy');
