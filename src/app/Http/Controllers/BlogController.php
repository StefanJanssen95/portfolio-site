<?php

namespace App\Http\Controllers;

class BlogController extends Controller {
	static public function view(){
		return view('page.blog', [
			"currentPage"=>"blog"
		]);
	}

}