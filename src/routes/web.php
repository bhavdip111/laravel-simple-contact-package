<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Bdits\Contact\Http\Controllers'], function() {
	
	Route::get('contact', 'ContactController@index')->name('contact');

	Route::post('contact', 'ContactController@send');
	
});