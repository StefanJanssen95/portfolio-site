<?php

namespace App\Http\Controllers;

class SkillController extends Controller {
	static public function view(){
		return view('page.skills', [
			"currentPage"=>"skills",
			"skills" => [
				[
					"logo" => "Laravel.svg",
					"name" => "Laravel",
				],[
					"logo" => "CSS3.svg",
					"name" => "CSS3",
				],[
					"logo" => "Electron.svg",
					"name" => "Electron",
				],[
					"logo" => "Git.svg",
					"name" => "Git",
				],[
					"logo" => "Javascript.svg",
					"name" => "Javascript",
				],[
					"logo" => "MySQL.svg",
					"name" => "MySQL",
				],[
					"logo" => "Node.js.svg",
					"name" => "Node.js",
				],[
					"logo" => "PHP.svg",
					"name" => "PHP",
				],[
					"logo" => ".NET.svg",
					"name" => ".NET",
				],[
					"logo" => "PostCSS.svg",
					"name" => "PostCSS",
				],[
					"logo" => "Sass.svg",
					"name" => "Sass",
				],[
					"logo" => "Yeoman.svg",
					"name" => "Yeoman",
				],
			]
		]);
	}
}