<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CodeHighlighter\PowershellController;
use App\Http\Requests\StoreBlogPost;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Storage;
use Michelf\MarkdownExtra;

class BlogPostController extends Controller {

	static public function get( $id ){
		return json_encode( BlogPost::find($id) );
	}

	static public function all(){
		return json_encode(BlogPost::all());
	}

	static public function delete($id){
		$post = BlogPost::find($id);
		if( Storage::delete($post->html_path) ){
			if( Storage::delete($post->markdown_path) ){
				$post->delete();
			}
		}
		return AdminController::viewBlog();
	}

	static public function store(StoreBlogPost $request){
		$blogPost = new BlogPost();
		$blogPost->name = $request->name;
		$blogPost->description = $request->description;
		$blogPost->markdown_path = $request->markdown->store('markdown');

		$filename = explode("/",$blogPost->markdown_path);
		$filename = end($filename);
		$filename = explode(".", $filename)[0];

		$markdownContent = Storage::get($blogPost->markdown_path);
		$parsedHtml = MarkdownExtra::defaultTransform( $markdownContent );

		/* Parse HTML to style codeblocks */
		// $1: language class
		// $2: code
		$codeblockRegex = "/<pre><code class=\"([a-z]+)\">([\s\S]*)<\/code><\/pre>/iU";
		$parsedHtml = preg_replace_callback($codeblockRegex, function($matches){
			switch( $matches[1] ){
				case "ps":
						$parsed = PowershellController::parse($matches[2]);
					break;
				default:
					$parsed = $matches[2];
			}
			return "<pre><code class='$matches[1]'>" . $parsed . "</code></pre>";
		}, $parsedHtml);

		if( Storage::put("html/$filename.html", $parsedHtml) ){
			$blogPost->html_path = "html/$filename.html";
			$blogPost->save();
			$message = "Blog Post Added";
		} else {
			$message = "Something went wrong during saving HTML";
		}

		$blogPost->save();

		return AdminController::viewBlog();
	}

}