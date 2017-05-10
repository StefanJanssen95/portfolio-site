<?php

namespace App\Http\Controllers;

class AdminController extends Controller {
	static public function view(){
		return view('page.admin', [
			"currentPage"=>"admin"
		]);
	}
}