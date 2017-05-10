<?php

//use Illuminate\Support\Facades\Auth;
//
//Auth::routes();
//dd(Route::getRoutes());

Route::get('/', 'WelcomeController@view')->name('welcome');
Route::get('/about', 'AboutController@view')->name('about');
Route::get('/skills', 'SkillController@view')->name('skills');
Route::get('/projects', 'ProjectController@view')->name('projects');
Route::get('/blog', 'BlogController@view')->name('blog');
Route::get('/admin/', 'AdminController@view')->name('admin');

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Redirects
Route::get('/linkedin', function () {
	return redirect('https://www.linkedin.com/in/stefanjanssenit/');
});

Route::get('/github', function () {
	return redirect('https://github.com/StefanJanssen95');
});

Route::get('/gitlab', function () {
	return redirect('https://gitlab.com/StefanJanssen95');
});
