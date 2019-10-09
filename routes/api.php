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
Route::get('patient/{id}', 'RecordController@show');
Route::get('patiens', 'RecordController@create');
Route::post('patiens', 'RecordController@store');
Route::put('patients/{id}', 'RecordController@update');
Route::delete('patients/{id}', 'RecordController@destroy');
Route::get('search/patients', 'RecordController@search');

Route::get('search/supports', 'SupportController@search');
Route::get('supports', 'SupportController@index');
Route::post('supports', 'SupportController@store');

Route::get('supports/{id}', 'SupportController@show');
Route::put('supports/{id}', 'SupportController@update');
Route::delete('supports/{id}', 'SupportController@destroy');

Route::post('letters','LettersController@store');
Route::get('letters/{id}', 'LettersController@show');
Route::get('letters', 'LettersController@index');
Route::put('letters/{id}', 'LettersController@update');
Route::delete('letters/{id}', 'LettersController@destroy');