<?php

Route::get('/', 'WelcomeController@view')->name('welcome');
Route::get('/about', 'AboutController@view')->name('about');
Route::get('/skills', 'SkillController@view')->name('skills');
Route::get('/projects', 'ProjectController@view')->name('projects');
Route::get('/blog', 'BlogController@view')->name('blog');
Route::get('/admin/', 'AdminController@view')->name('admin');

Route::post('/login', '')

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
