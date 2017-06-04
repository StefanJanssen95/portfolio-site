<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Storage;

class ProjectController extends Controller {
	static public function all(){
		return response()->json( Project::all() );
	}

	static public function allPublic(){
		$projects = Project::where('hidden', 0)->get();
		foreach( $projects as $project ){
			$project->image = asset('storage/'.$project->image, true);
		}
		return response()->json( $projects );
	}

	static public function get( $id ){
		$project = Project::find($id);
		if( $project ){
			return response()->json( $project );
		}
		return response()->json(['error' => 'Project not found', 404]);
	}

	static public function delete($id){
		$project = Project::find($id);
		if( $project ){
			if( $project->delete() ){
				return response()->json( ['message' => 'Project succesfully deleted'] );
			}
			return response()->json(['error' => 'Something went wrong with deleting the project', 500]);
		}
		return response()->json(['error' => 'Project not found', 404]);
	}

	static public function store(Request $request){
		$project = new Project( $request->all() );
		$project->hidden = $project->hidden ? 1 : 0;
		$filePath = Storage::disk('public')->put("projects", $request->image);
		if ( $filePath ) {
			$project->image = $filePath;
			$project->save();
			$project->image = asset('storage/'.$project->image, true);
			return response()->json($project);
		}
	}
}