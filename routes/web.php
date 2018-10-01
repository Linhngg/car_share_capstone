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
Route::get('/simulation', 'simulation@index')->name('simulation');
Route::get('/book/{id}', 'BookingController@book')->name('book');
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::post('/confirm', 'BookingController@confirm')->name('confirm-booking');
Route::get('/maps', 'AdminController@maps')->name('maps');
Route::get('/bookings', 'AdminController@bookings')->name('bookings');
Route::get('/service', 'AdminController@service')->name('service');
Route::get('/retire', 'AdminController@retire')->name('retire');
Route::post('/sendService', 'AdminController@sendService')->name('sendService');
Route::post('/releaseService', 'AdminController@releaseService')->name('releaseService');
Route::post('/retireCar', 'AdminController@retireCar')->name('retireCar');
Route::post('/return', 'BookingController@return')->name('return');
Route::post('/postreturn', 'BookingController@post_return')->name('post_return');
Route::post('/simupdate', 'AdminController@simUpdate')->name('simupdate');
Route::get('/u/', 'UserDashboardController@index')->name('user');
Route::get('/u/bookings', 'UserDashboardController@history')->name('user-bookings');
