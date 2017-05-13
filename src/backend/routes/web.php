<?php

//use Illuminate\Support\Facades\Auth;
//
//Auth::routes();
//dd(Route::getRoutes());

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
	return view('page.welcome', [
		"currentPage"=>"welcome",
		"text"=>WelcomeTextController::get()
	]);
})->name('welcome');

Route::get('/about', function(){
	return view('page.about', ["currentPage"=>"about"]);
})->name('about');

Route::get('/skills', function(){
	return view('page.skills', [
		"currentPage"=>"skills",
		"skills" => SkillController::all()
	]);
})->name('skills');

Route::get('/projects', function(){
	return view('page.projects', [
		"currentPage"=>"projects",
		"projects" => ProjectController::all()
	]);
})->name('projects');

Route::group(['prefix'=>'/blog'], function() {
	Route::get('/', function(){
		return view('page.blog.overview', [
			"currentPage"=>"blog",
			"blogPosts" => BlogPostController::all()->reverse()
		]);
	})->name('blog.overview');

	Route::get('/{id}', function($id){
		return view('page.blog.post', [
			"currentPage"=>"blog",
			"post" => BlogPostController::find((int) $id)
		]);
	})->name('blog.post');
});

// TODO: REFACTOR ADMIN PAGES

Route::group(['prefix'=>'/admin'], function(){
	Route::get('/', 'AdminController@viewMain')->name('admin.login');
	Route::group(['middleware'=>'auth'], function() {
		Route::get('/dashboard', function(){
		})->name('admin.dashboard');
		/* Manage Blog routes */
		Route::group(['prefix' => '/blog'], function () {
			Route::get('/', 'AdminController@viewBlog')->name('admin.blog');
			Route::post('/', 'BlogPostController@store')->name('admin.blog.store');
			Route::delete('delete/{id}', 'BlogPostController@delete')->name('admin.blog.delete');
		});
		/* Not yet implemented routes */
		Route::get('/stats', 'AdminController@viewStats')->name('admin.stats');
		Route::get('/translations', 'AdminController@viewTranslations')->name('admin.translations');
		Route::get('/skills', 'AdminController@viewSkills')->name('admin.skills');
		Route::get('/projects', 'AdminController@viewProjects')->name('admin.projects');
	});
});
Route::post('/login',   'Auth\LoginController@login')->name('login');
Route::post('/logout',  'Auth\LoginController@logout')->name('logout');

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
