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

//后台登录
Route::get('/AdminLogin', function () {
    return view('admin/login');
});
Route::post('/AdminDologin', 'Admin\LoginController@doLogin');
//后台组
Route::group(['namespace' => 'Admin','middleware' => 'checkAdmin'], function () {
    Route::get('/Admin', function () {
        return view('admin/index');
    });
    Route::get('/users', 'UserController@userlist');
    Route::get('/userProfile', 'UserController@profile');
    Route::any('/adduser', 'UserController@add');

});
