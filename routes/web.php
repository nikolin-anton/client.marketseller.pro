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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function (){
//   return view('index');
//});
//Route::get('/setting', function (){
//    return view('setting');
//});
//
//Route::get('/auth', function (){
//    return view('/auth/auth');
//});
//Route::get('/recovery', function (){
//    return view('/auth/recovery');
//});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/reset_password', 'App\Http\Controllers\Auth\ResetUserPasswordController@index')->name('reset_password');
Route::post('/reset_password', 'App\Http\Controllers\Auth\ResetUserPasswordController@reset_password')->name('reset_password.update');
//Route::post('password/reset', 'App\Http\Controllers\Auth\ResetUserPasswordController@reset_password_by_email')->name('reset_password_by_email');

