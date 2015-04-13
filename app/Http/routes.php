<?php

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
*/

/*
| For Testing
*/
if (config('app.debug')) {
    Route::get('test', function() {

        return view('index');
    });
}


Route::get('/', 'HomeController@getIndex');

Route::controllers([
	'user' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
