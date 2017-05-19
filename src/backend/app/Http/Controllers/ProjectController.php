<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller {
	static protected $projects = [

	];
	static public function all(){
		return response()->json( Project::all() );
	}
	static public function get( $id ){
		$response = Project::find($id);
		if( $response ){
			return response()->json( $response );
		}
		return response()->json(['error' => 'Project not found', 404]);
	}
}