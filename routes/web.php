<?php

use Illuminate\Support\Facades\Route;

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
    return view('guests.home');
});

Route::get('/search-apartment', 'GuestController@index')->name('search-apartment');
Route::post('/search-apartament', 'GuestController@info')->name('search-params');

Route::get('/apartment-detail/{id}', 'GuestController@show')->name('apartment-detail');

Route::get('/host', function () {
  return view('guests.become-host');
})->name('become-host');

Auth::routes();
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('property', 'PropertyController');
        Route::resource('message', 'MessageController');
        Route::get('/message', 'MessageController@index')->name('messages');
        Route::post('/message', 'MessageController@store')->name('messages.store');
        Route::get('/sponsor', 'SponsorController@index')->name('sponsors');
        Route::get('/dashboardhome', 'DashboardHomeController@index')->name('dashboardhome');
        Route::get('/payment/{property}', 'PaymentController@request')->name('payment.request');
        Route::post('/payment/{property}', 'PaymentController@payment')->name('payment.payment');
        Route::get('/check', 'PaymentController@check')->name('payment.check');

});



