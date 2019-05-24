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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');

    Route::resource('/category','ProductCategoryController');
    Route::resource('/courier','CouriersController');
    /* sudah mau */
    Route::get('/courier/update/{id}', 'CouriersController@update');
    Route::get('/category/update/{id}', 'ProductCategoryController@update');
    /* sudah mau */
    Route::delete('/courier/{id}', 'CouriersController@destroy')->name('courier.destroy');
    Route::delete('/category/{id}', 'ProductCategoryController@destroy')->name('category.destroy');
});

