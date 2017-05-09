<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('page.welcome', ["currentPage"=>"welcome"]);
})->name('welcome');

Route::get('/about', function () {
	return view('page.about', ["currentPage"=>"about"]);
})->name('about');

Route::get('/skills', function () {
	return view('page.skills', ["currentPage"=>"skills"]);
})->name('skills');

Route::get('/projects', function () {
	return view('page.projects', ["currentPage"=>"projects"]);
})->name('projects');

Route::get('/blog', function () {
	return view('page.blog', ["currentPage"=>"blog"]);
})->name('blog');

Route::get('/blog/{id}/', function(){
	return redirect('page.welcome');
});

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
