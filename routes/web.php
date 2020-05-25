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
    ->middleware('check.id');
Route::get('/entry/{vehicle_id}', 'EntryController@entry')
    ->middleware('check.id');
Route::get('/exit/{parking_id}', 'EntryController@exit')
    ->middleware('check.id');
Route::get('/classes', 'ClassController@getClassesId');
Route::get('/discounts', 'DiscountController@getDiscountId');
Route::get('/discounts/{vehicle_id}', 'DiscountController@getDiscount')
    ->middleware('check.id');
Route::get('/discounts/{vehicle_id}/{discount_id}', 'DiscountController@setVehicleDiscount')
    ->middleware('check.id');
Route::get('/register/{number}/{class_id}', 'RegisterController@register')
    ->middleware('check.id');
