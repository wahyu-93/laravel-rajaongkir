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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/ongkir', 'CheckOngkirController@index')->name('ongkir.index');
Route::post('/ongkir', 'CheckOngkirController@check_ongkir')->name('ongkir.check_ongkir');
Route::get('/cities/{province_id}', 'CheckOngkirController@getCities')->name('cities');
