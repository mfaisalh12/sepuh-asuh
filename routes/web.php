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


Route::get('/', 'BerandaController@index');
Route::get('/program', 'ProgramController@index');
Route::get('/donasi','DonasiController@donasi');
Route::post('/donasi','DonasiController@submit');
Route::get('/tentang-kami', 'SendEmailController@index');
Route::post('/tentang-kami/send', 'SendEmailController@send');
Route::get('/login', 'LoginController@index');
Route::get('/login/cek', 'NewAccountController@cek');
Route::get('/newaccount', 'NewAccountController@index');
Route::post('/newaccount','NewAccountController@store');
