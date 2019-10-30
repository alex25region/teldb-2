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

Route::get('/main', 'FrontController@index');


$groupData = [
    'namespace' => 'Admin',
    'prefix' => 'admin'
];

Route::group($groupData, function () {

    Route::get('/', 'DashboardController@index');
    //Users
    Route::resource('users', 'TUsersController')->names('admin.users');
    //Posts
    Route::resource('posts', 'TPostsController')->names('admin.posts');
    //Otdels
    Route::resource('otdels', 'TOtdelsController')->names('admin.otdels');
});