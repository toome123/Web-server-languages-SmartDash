<?php

// =============================================
// HOME PAGE ===================================
// =============================================
Route::get('/', function()
{
	return View::make('index');
});

// =============================================
// API ROUTES ==================================
// =============================================
Route::group(array('prefix' => 'api'), function() {

	Route::resource('devices', 'DeviceController');

	Route::resource('device/{value}', 'DeviceController@getValues');

	Route::resource('settings', 'SettingsController', 
		array('except' => array('create', 'edit', 'update')));
});

// =============================================
// CATCH ALL ROUTE =============================
// =============================================
// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
App::missing(function($exception)
{
	return View::make('index');
});