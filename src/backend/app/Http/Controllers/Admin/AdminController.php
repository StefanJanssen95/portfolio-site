<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;

class AdminController extends Controller {
	static public function viewMain(){
		return view('page.admin.main', [
			"currentPage"=>"admin"
		]);
	}

	static public function viewBlog(){
		return view('page.admin.blog', [
			"currentPage"=>"admin",
		    "blogPosts"=>BlogPost::all()->reverse()
		]);
	}

	static public function viewStats(){
		return view('page.admin.main', [
			"currentPage"=>"admin"
		]);
	}

	static public function viewTranslations(){
		return view('page.admin.main', [
			"currentPage"=>"admin"
		]);
	}

	static public function viewSkills(){
		return view('page.admin.main', [
			"currentPage"=>"admin"
		]);
	}

	static public function viewProjects(){
		return view('page.admin.main', [
			"currentPage"=>"admin"
		]);
	}
}