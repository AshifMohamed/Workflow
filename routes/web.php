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

// Route::get('/hod', function () {
//     return view('HOD.HOD_home');
// });

// Route::get('/hod/user-access', function () {
//     return view('HOD.HOD_UserAccess');
// });




Route::resource('hod','HOD_UserAccessController');

Route::resource('hr','HR_UserAccessController');

Route::resource('ciso','CISO_UserAccessController');

Route::resource('it','IT_UserAccessController');
