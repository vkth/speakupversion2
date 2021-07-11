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

    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    
    //Reports
    Route::get('/reports', 'ReportController@index')->name('reports');
        Route::get('/commends', 'Reports\CommendController@index')->name('commends');
        Route::get('/complaints', 'Reports\ComplaintController@index')->name('complaints');
        Route::get('/reviews', 'Reports\ReviewController@index')->name('reviews');
        
        Route::resource('complaints','Reports\ComplaintController');
        Route::post('complaints/action', 'Reports\ComplaintController@action')->name('complaints.action');

    //App Users
    Route::get('/mobileappusers', 'MobileAppUserController@index')->name('mobileappusers');
    Route::resource('/mobileappusers', 'MobileAppUserController');  // update
    
    //Operators
    Route::get('/operators', 'OperatorController@index')->name('operators.index');
    Route::resource('/operators', 'OperatorController');  // update
    Route::get('delete/{id}','OperatorController@destroy'); // delete
    Route::put('/operators/{operator?}','OperatorController@update')->name('operator.update'); //update

    //Vehicles
    Route::resource('/vehicles', 'VehicleController'); //update
    Route::get('/vehicles', 'VehicleController@index')->name('vehicles');
    Route::get('/vehicles/{id}/edit/','VehicleController@edit');
    Route::put('/vehicles/{vehicle?}','VehicleController@update')->name('vehicle.update'); //update
    

    Route::get('/home', 'HomeController@index')->name('home');
    
  
});


