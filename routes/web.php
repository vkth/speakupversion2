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

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');
    
    Route::get('/reports', 'ReportController@index')->name('reports');
    Route::get('/commends', 'Reports\CommendController@index')->name('commends');
    Route::get('/complaints', 'Reports\ComplaintController@index')->name('complaints');
    Route::get('/reviews', 'Reports\ReviewController@index')->name('reviews');
    Route::get('/operators', 'OperatorController@index')->name('operators');
    Route::get('/vehicles', 'VehicleController@index')->name('vehicles');
    Route::get('/mobileappusers', 'MobileAppUserController@index')->name('mobileappusers');
   
    Route::resource('/operators', 'OperatorController');  // update
    Route::view('operators-edit','livewire.operator_home'); //edit

    Route::resource('/vehicles', 'VehicleController'); //update
    Route::view('vehicles-edit','livewire.home'); // edit
    Route::put('/vehicles/{vehicle?}','VehicleController@update')->name('vehicle.update'); //update

    Route::get('/form-file', function () {
    return view('formfile'); // upload file
    });

    Route::get('/home', 'HomeController@index')->name('home');
    
});


