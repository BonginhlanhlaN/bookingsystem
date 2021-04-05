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

Route::get('/', 'PagesController@home');
Route::get('/bookingsession/bookingsinday' , 'BookingSessionController@getDaySessions');
Route::get('/bookingsession/getTimeSession' , 'BookingSessionController@saveTimeSession');
Route::get('/bookingsession/schedulesession' , 'BookingSessionController@afterScheduleAppointment');

Route::get('/testemail' , 'TestsController@testEmail');
Route::get('/testsms' , 'TestsController@testNexmo');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('services' , 'ServicesController');
Route::resource('bookings' , 'BookingsController');
