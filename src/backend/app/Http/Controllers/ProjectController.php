<?php

namespace App\Http\Controllers;

class ProjectController extends Controller {
	static public function all(){
		return [
			[
				"name" => "Portfolio website",
				"description" => "The website you are looking at right now.",
				"tags" => ["HTML5", "SCSS", "PHP", "Laravel", "PostCSS", "MySQL"],
				"photo" => "portfolio.png"
			]
		];
	}
}