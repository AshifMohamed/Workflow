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

// Route::get('/', function () {


// });

Route::get('/', function () {
    return view('auth/login');
})->middleware('auth','role');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/hod', function () {
//     return view('HOD.HOD_home');
// });

// Route::get('/hod/user-access', function () {
//     return view('HOD.HOD_UserAccess');
// });

// Route::get('/decline-request','HOD_UserAccessController@index');

Route::get('decline-request_HR/{request}','HR_UserAccessController@declineRequestHR');

Route::get('decline-request_CISO/{request}','CISO_UserAccessController@declineRequestCISO');

Route::get('decline-request_IT/{request}','IT_UserAccessController@declineRequestIT');

//->middleware('auth');


Route::resource('admin','AdminController');

Route::resource('hod','HOD_UserAccessController');

Route::resource('hr','HR_UserAccessController');

Route::resource('ciso','CISO_UserAccessController');

Route::resource('it','IT_UserAccessController');
