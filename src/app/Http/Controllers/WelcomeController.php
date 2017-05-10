<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller {
	static public function view(){
		return view('page.welcome', [
			"currentPage"=>"welcome",
			"text"=>WelcomeTextController::get()
		]);
	}
}