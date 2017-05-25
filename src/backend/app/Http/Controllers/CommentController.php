<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Auth;
use Request;

class CommentController extends Controller {

	static public function getForPost( $postId ){
		Comment::all()
			->where('post_id', $postId)
			->whereNull('comment_parent');
	}

	static public function getNeedsApproval(){
		Comment::all()->where('approved', 0);
	}

	static public function store(Request $request){
		$comment = new Comment( $request->all() );
		// Approve if user is signed in (so admin)
		if( Auth::user() ){
			$comment->approved = 1;
			$comment->notify_approval = 0;
			$comment->notify_reply = 0;
		}
		if( $comment->save() ){
			return response()->json(['comment' => $comment]);
		} else {
			return response()->json(['message' => 'Something unexpected happened'], 500);
		}

	}
}