<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Michelf\MarkdownExtra;
use Illuminate\Foundation\Http\FormRequest;

class BlogPostController extends Controller {

	static public function get( $id ){
		return Blog::find($id);
	}

	static public function all(){
		return Blog::all();
	}

	static public function create(FormRequest $request){

	}

}