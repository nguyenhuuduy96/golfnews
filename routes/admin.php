<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::group(['prefix'=>'notification'],function(){
	Route::get('/','Admin\NotificationController@index')->name('notification');
	Route::post('update','Admin\NotificationController@getUpdate')->name('notification.update');
	Route::post('save','Admin\NotificationController@save')->name('save.notification');
	Route::post('delete','Admin\NotificationController@delete');
	Route::post('disable','Admin\NotificationController@disable');
});