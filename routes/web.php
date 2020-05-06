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
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});




//XXXにアクセスが来たら、コントローラーAAAのアクションbbbに渡す設定
Route::get('XXX', 'AAA@bbb');



//課題3  課題4
//admin/profile/create にアクセスしたら ProfileController の add Actionに渡す設定
//追記、ログインしていない時にログイン画面にリダイレクトされる
Route::get('admin/profile/create', 'Admin\ProfileController@add')->middleware('auth');

//admin/profile/edit にアクセスしたら ProfileController の edit Actionに渡す設定
//追記、ログインしていない時にログイン画面にリダイレクトされる
Route::get('admin/profile/edit', 'Admin\ProfileController@edit')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


