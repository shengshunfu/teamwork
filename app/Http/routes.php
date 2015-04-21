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
    Route::get('test', 'TestController@getIndex');
}

/*
| Index
*/
Route::get('/', 'HomeController@getIndex');


/*
| User
*/
Route::get('user/login', 'Auth\EmailAuthController@getLogin');
Route::post('user/login', 'Auth\EmailAuthController@postLogin');

Route::get('user/logout', 'Auth\EmailAuthController@getLogout');

/*
| Knowledge
*/
Route::post('knowledge/repo_hook', 'KnowledgeController@postRepoHook');

Route::get('knowledge', 'KnowledgeController@getIndex');
Route::get('knowledge/{page}', 'KnowledgeController@getPage')->where('page', '.+');