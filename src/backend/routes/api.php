<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/welcome/random', 'WelcomeTextController@get');
Route::get('/projects/', 'ProjectController@all');
Route::get('/projects/{id}', 'ProjectController@get');

Route::group(['prefix'=>'/blog'], function(){
	Route::get('/', 'BlogPostController@all');
	Route::get('/published', 'BlogPostController@published');
	Route::get('/{id}', 'BlogPostController@get');

	Route::post('/store', 'BlogPostController@store');
	Route::delete('/{id}', 'BlogPostController@delete');
});

Route::group(['prefix'=>'/comment'], function(){

});