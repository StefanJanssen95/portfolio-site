<?php

namespace App\Http\Controllers;

use App\Models\WelcomeText;

class WelcomeTextController extends Controller {
	static public function get(){
		// TODO: Decide to use a '.', '!' or randomly selected ending.
		return response()->json(
			WelcomeText::all()->random()
		);
	}
}