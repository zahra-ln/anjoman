<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('patients', 'RecordController@index');
Route::get('patients/{id}', 'RecordController@show');
Route::post('patiens', 'RecordController@store');

Route::put('patients/{id}', 'RecordController@update');
Route::delete('patients/{id}', 'RecordController@destroy');




Route::get('supports', 'SupportController@index');
Route::post('supports', 'SupportController@store');

Route::delete('supports/{id}', 'SupportController@destroy');