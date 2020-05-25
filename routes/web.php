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
    return view('welcome');
});

Route::get('/space', 'MiscellaneousController@space');
Route::get('/bill/{parking_id}/{time?}', 'MiscellaneousController@bill')
    ->middleware('check.parking_id');
Route::get('/entry/{vehicle_id}', 'EntryController@entry');
Route::get('/exit/{parking_id}', 'EntryController@exit')
    ->middleware('check.parking_id');
