<?php

namespace App\Http\Controllers;

class ProjectController extends Controller {
	static protected $projects = [
		[
			"name" => "Portfolio website",
			"description" => "The website you are looking at right now.",
			"tags" => ["HTML5", "SCSS", "PHP", "Laravel", "PostCSS", "MySQL"],
			"cover" => "portfolio.png"
		],
	];
	static public function all(){
		$projects = static::$projects;
		foreach( $projects as $key=>$project){
			$projects[$key]['cover'] = asset("/images/projects/".$project['cover'], true);
		}
		return json_encode($projects);
	}
	static public function get($id){
		$project = static::$projects[$id];
		$project['cover'] = asset("/images/projects/".$project['cover'], true);
		return json_encode( $project );
	}
}