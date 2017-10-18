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
    return view('home');
});

Auth::routes();

Route::get('admin/dashboard', 'admin\DashboardController@index')->name('admin.dashboard');

Route::get('admin/add/location', 'admin\DashboardController@new_location')->name('add.location');

Route::post('post_location', 'admin\DashboardController@add_location');

Route::get('get-location', 'admin\DashboardController@get_location');

