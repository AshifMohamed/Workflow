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

Route::get('/hod', function () {
    return view('HOD.HOD_home');
});

Route::get('/hod/user-access', function () {
    return view('HOD.HOD_UserAccess');
});

Route::get('/hr', function () {
    return view('HR.HR_home');
});

Route::get('/hr/user-access', function () {
    return view('HR.HR_UserAccess');
});

Route::get('/ciso', function () {
    return view('CISO.CISO_home');
});

Route::get('/ciso/user-access', function () {
    return view('CISO.CISO_UserAccess');
});

Route::get('/it', function () {
    return view('IT.IT_home');
});

Route::get('/it/user-access', function () {
    return view('IT.IT_UserAccess');
});

