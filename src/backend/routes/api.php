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
	Route::get('/', 'BlogPostController@published');
	Route::get('{postId}/comments/', 'CommentController@getForPost');
	Route::get('/{id}', 'BlogPostController@get');
});

Route::group(['prefix'=>'/comment'], function(){
	Route::post('/', 'CommentController@store');
});

Route::group(['prefix'=>'/admin', 'middleware'=>'auth:api'], function(){
	Route::group(['prefix'=>'/blog'], function(){
		Route::get('/', 'BlogPostController@all');
		Route::get('/{id}', 'BlogPostController@get');

		Route::post('/', 'BlogPostController@store');
		Route::delete('/{id}', 'BlogPostController@delete');

		Route::group(['prefix'=>'/cover'], function(){
			Route::get('/', 'BlogPostController@allCovers');
			Route::get('/{id}', 'BlogPostController@getCover');

			Route::post('/', 'BlogPostController@storeCover');
			Route::delete('/{id}', 'BlogPostController@deleteCover');
		});
	});
});