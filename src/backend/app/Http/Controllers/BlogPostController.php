<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostRequest;
use App\Models\BlogPost;
use Carbon\Carbon;
use Highlight\Highlighter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Michelf\MarkdownExtra;

class BlogPostController extends Controller {
	static private $markdownPath = 'blog/original/';
	static private $htmlPath = 'blog/parsed/';
	static private $highlighter;

	static public function get( $id ){
		$post = BlogPost::find($id);
		if( Carbon::createFromFormat('Y-m-d H:i:s', $post['publish_date'])->isFuture() ){
			return response()->json( ['error' => 'Blogpost hasn\'t been published yet.'], 423);
		}
		$post['html'] = Storage::get($post['html_path']);
		unset($post['html_path']);
		unset($post['markdown_path']);
		return response()->json( ['post' => $post]  );
	}

	static public function all(){
		return response()->json( BlogPost::all() );
	}

	static public function published(){
		$published = BlogPost::all()->where('publish_date', '<=', Carbon::now() );
		return response()->json( ['posts' => $published] );
	}

	static public function delete($id){
		$post = BlogPost::find($id);
		if( Storage::delete($post->html_path) ){
			if( Storage::delete($post->markdown_path) ){
				$post->delete();
			}
		}
		return response()->json(['message'=>'Blogpost with id "'.$id.'" has been deleted succesfully.']);
	}

	static public function store(Request $request){
		$randomFileName = md5($request->name . date('c') );
		$markdownPath = static::$markdownPath . $randomFileName . '.md';
		$htmlPath = static::$htmlPath . $randomFileName . '.html';

		$blogPost = new BlogPost();
		$blogPost->name = $request->name;
		$blogPost->description = $request->description;
		$blogPost->publish_date = $request->publishDate;
		if( Storage::put( $markdownPath, $request->markdown ) ){
			$blogPost->markdown_path = $markdownPath;

			$htmlCode = static::markdownToHtml( $request->markdown );

			if( Storage::put( $htmlPath, $htmlCode ) ){
				$blogPost->html_path = $htmlPath;

				if( $blogPost->save() ){
					return response()->json(["id" => $blogPost->id]);
				} else {
					return  response()->json(["error" => "Couldn't save the model"], 500);
				}
			} else {
				return response()->json(["error" => "Couldn't save the html file."], 500);
			}
		} else {
			return response()->json(["error" => "Couldn't save the markdown file."], 500);
		}
	}

	static private function markdownToHtml( $markdownCode ){
		if( !isset( static::$highlighter ) ){ static::$highlighter = new Highlighter(); }
		$parsedHtml = MarkdownExtra::defaultTransform( $markdownCode );
		/* Parse HTML to style codeblocks */
		// $1: language class
		// $2: code
		$codeBlockRegex = "/<pre><code class=\"([a-z]+)\">([\s\S]*)<\/code><\/pre>/iU";
		$parsedHtml = preg_replace_callback($codeBlockRegex, function($matches){
			$result = static::$highlighter->highlight($matches[1], $matches[2]);
			return "<pre class='$matches[1] hljs'>" . $result->value . "</pre>";
		}, $parsedHtml);

		return $parsedHtml;
	}

}