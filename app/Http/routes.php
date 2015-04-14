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


/*
| User
*/
Route::get('user/signup', 'Auth\AuthController@getRegister');
Route::post('user/signup', 'Auth\AuthController@postRegister');

Route::get('user/login', 'Auth\AuthController@getLogin');
Route::post('user/login', 'Auth\AuthController@postLogin');


// Route::controllers([
// 	'user' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

/*
| Knowledge
*/
Route::get('knowledge', 'KnowledgeController@getIndex');
Route::get('knowledge/{page}', 'KnowledgeController@getPage')->where('page', '.+');