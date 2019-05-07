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

//Route::get('/', 'Controller@index')->name('home');
//Route::resource('admin','admincontroller');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/managegame', function () {
    return view('admin.managgame');
});

Auth::routes();

/*
// Ujicoba Layout
Route::get('ujicoba', function(){
    return view('layouts.app');
});
*/

Route::get('/login', 'admincontroller@index')->name('login');
Route::get('/register', 'admincontroller@regis')->name('register');
Route::get('/user', 'usercontroller@userreg')->name('userreg');
Route::resource('user', 'usercontroller');
Route::get('/home', 'usercontroller@index')->name('home');
Route::get('/home', 'usercontroller@index')->name('home');
Route::post('/log-in', 'usercontroller@signin')->name('sign-in');
