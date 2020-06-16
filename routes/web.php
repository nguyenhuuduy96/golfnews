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
//     return view('admin.list');
// });

Route::get('register','Admin\AuthController@register')->name('register');
Route::post('save-register','Admin\AuthController@saveregister')->name('save.register');
Route::get('login','Admin\AuthController@login')->name('login');
Route::post('check-phone','Admin\AuthController@checkPhonevery');
Route::post('post-login','Admin\AuthController@activelogin');
Route::get('logout','Admin\AuthController@logout')->name('logout');
Route::get('/',function(){
	return view('home.index');
})->name('home');

