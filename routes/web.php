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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});



//課題３
//XXXにアクセスが来たら、コントローラーAAAのアクションbbbに渡す設定
Route::get('XXX', 'AAA@bbb');



//課題４
//admin/profile/create にアクセスしたら ProfileController の add Actionに渡す設定
Route::get('admin/profile/create', 'Admin\ProfileController@add');

//admin/profile/edit にアクセスしたら ProfileController の edit Actionに渡す設定
Route::get('admin/profile/edit', 'Admin\ProfileController@edit');