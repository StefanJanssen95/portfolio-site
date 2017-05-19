<?php

namespace App\Http\Controllers;

use App\WelcomeText;

class WelcomeTextController extends Controller {
	static public function get(){
		// TODO: Decide to use a '.', '!' or randomly selected ending.
		return json_encode(
			WelcomeText::all()->random()
		);
	}
}