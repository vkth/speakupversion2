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
    Route::get('/commends', 'Reports\CommendController@index')->name('commends');
    Route::get('/complaints', 'Reports\ComplaintController@index')->name('complaints');
    Route::get('/reviews', 'Reports\ReviewController@index')->name('reviews');
    Route::get('/operators', 'OperatorController@index')->name('operators');
    Route::get('/vehicles', 'VehicleController@index')->name('vehicles');
    
    Route::get('/reports', 'ReportController@index')->name('reports');
    
    
    Route::get('/error', 'ErrorController@index')->name('error');

    Route::resource('/operators', 'OperatorController');
    Route::view('operators-edit','livewire.operator_home');

    Route::get('/form-file', function () {
    return view('formfile');
    });

    Route::resource('/vehicles', 'VehicleController');
    Route::view('vehicles-edit','livewire.home');

// Route::middleware('auth')->group(function () {
    Route::resource('/todo', 'TodoController');
    Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');
    Route::delete('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');
// });

Route::get('/user', 'UserController@index');

Route::post('/upload', 'UserController@uploadAvatar');

Route::get('/home', 'HomeController@index')->name('home');

    
});


