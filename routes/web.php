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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/patient', 'PatientprofileController@index')->name('patient');
Route::get('/api/patients', 'PatientprofileController@indexApi');
Route::get('/patient/create', 'PatientprofileController@create');
Route::post('/patient', 'PatientprofileController@store');
Route::get('/patient/{patient}/edit', 'PatientprofileController@edit');
Route::patch('/patient/{patient}', 'PatientprofileController@update');
Route::get('/patient/{patient}/destroy', 'PatientprofileController@destroy');

