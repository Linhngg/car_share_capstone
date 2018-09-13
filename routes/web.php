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
Route::post('/return', 'BookingController@return')->name('return');
Route::get('/maps', 'AdminController@maps')->name('maps');
Route::get('/bookings', 'AdminController@bookings')->name('bookings');
Route::get('/return', 'BookingController@returnCar')->name('return');