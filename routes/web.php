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
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create'); # 追記
    Route::get('news', 'Admin\NewsController@index');
    Route::get('news/edit', 'Admin\NewsController@edit'); // 追記php/laravel116
    Route::post('news/edit', 'Admin\NewsController@update'); // 追記php/laravel116更新
    Route::get('news/delete', 'Admin\NewsController@delete');//追記php/larabel16削除
    
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::get('profile', 'Admin\ProfileController@index');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/edit', 'Admin\ProfileController@update');
});

//課題３
Route::get('XXX', 'AAAController@bbb');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'NewsController@index');//追記php/laravel19
Route::get('/profile', 'ProfileController@index');//追記php/laravel19課題