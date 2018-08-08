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

Route::post('users', 'UserController@createUser');

Route::get('users', 'CUsers@getUsers');

Route::get('user/{id}', 'CUsers@getUser');

Route::post('adduser', 'CUsers@insertUser');

Route::post('upduser/{id}', 'CUsers@updateUser');

Route::delete('deluser/{id}', 'CUsers@delUser');
