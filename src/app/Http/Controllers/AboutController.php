<?php

namespace App\Http\Controllers;

class AboutController extends Controller {
	static public function view(){
		return view('page.about', ["currentPage"=>"about"]);
	}
}