<?php

namespace App\Http\Controllers;

class ProjectController extends Controller {
	static protected $projects = [
		[
			"name" => "Portfolio website",
			"description" => "The website you are looking at right now.",
			"tags" => ["HTML5", "SCSS", "PHP", "Laravel", "PostCSS", "MySQL"],
			"photo" => "portfolio.png"
		]
	];
	static public function all(){
		return json_encode(static::$projects);
	}
	static public function get($id){
		return json_encode(static::$projects[$id]);
	}
}