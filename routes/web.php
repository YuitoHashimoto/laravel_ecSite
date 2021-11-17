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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ユーザー登録フォームを表示
Route::get('/userRegister', 'userController@userRegister')->name('userRegister');

//ユーザー登録フォームをDBに登録
Route::post('/userRegister/insert', 'userController@userInsert')->name('userInsert');

//ユーザーリスト
Route::get('/userList', 'userController@userList')->name('userList');

//ユーザーリスト
Route::get('/userList/search', 'userController@search')->name('search');

//お問い合わせ送信フォームを表示
Route::get('/inquiryRegister', 'userController@inquiryRegister')->name('inquiryRegister');

//お問い合わせ送信フォームをDBに登録
Route::post('/inquiryRegister/insert', 'userController@inquiryInsert')->name('inquiryInsert');

//お問い合わせリスト
Route::get('/inquiryList', 'userController@inquiryList')->name('inquiryList');

//お問い合わせリスト詳細
Route::get('/inquiryList/edit', 'userController@inquiryEdit')->name('inquiryEdit');
