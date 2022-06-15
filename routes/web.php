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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'App\Http\Controllers\AuthController@home');

Route::get('/register','App\Http\Controllers\AuthController@register');

Route::get('/login', 'App\Http\Controllers\AuthController@login');

Route::post('/simpanuser','App\Http\Controllers\AuthController@simpanuser');

Route::post('/ceklogin','App\Http\Controllers\AuthController@ceklogin');