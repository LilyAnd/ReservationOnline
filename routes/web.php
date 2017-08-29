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

Route::get('admin/home', 'AdminController@index')->name('admin.dashboard');
Route::get('admin/merchant', 'MerchantController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

// Route::resource('/item','ItemController');
Route::resource('/home','HomeController');
// Route::resource('/merchant','MerchantController');

//CUSTOMER RESERVASI
	Route::get('/daftar','CustreservController@daftar');

	Route::get('/daftar/dashboard/{id_merchant}','CustreservController@index');

	Route::get('/daftar/reservasi/{id_merchant}','CustreservController@reservasi');

	Route::post('daftar/save','CustreservController@postReservasi');

	Route::get('/show','CustreservController@show')->name('show');

	Route::get('/detail','CustreservController@detail')->name('detail');

	Route::get('/history','CustreservController@history')->name('history');

	Route::get('/history/detail/{id_reservation}','CustreservController@detail');

	// Route::get('/show/{id_reservation}','CustreservController@detail');

Route::get('/setting', 'CustomerController@setting')->name('setting');

Route::post('/update_profile', 'CustomerController@postSetting')->name('postSetting');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function()
{
	Route::resource('/item','ItemController');

	Route::resource('/reservmerchant','MerchantReservationController');

	Route::get('/setting', 'AdminController@setting')->name('admin.setting');

	Route::post('/update_profile', 'AdminController@postSetting')->name('admin.postSetting');

	Route::get('/history-reservation','MerchantReservationController@history')->name('admin.history');

	Route::get('/history-reservation/detail/{id_reservation}','MerchantReservationController@detail');

});





