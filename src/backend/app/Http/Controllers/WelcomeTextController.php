<?php

namespace App\Http\Controllers;

class WelcomeTextController extends Controller {
	static public function get(){
		// TODO: Decide to use a '.', '!' or randomly selected ending.
		$texts = [
			'a full-stack developer.',
		    'a problem solver.',
		    'a game developer.',
		    'an UWP developer.',
			'a .NET developer.',
		    'a tech enthousiast.',
		];
		return json_encode([
			"text"=>$texts[array_rand($texts)]
		]);
	}
}