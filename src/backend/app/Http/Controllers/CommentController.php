<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller {

	static public function getForPost( $postId ){
		return response()->json( ['comments' => Comment::all()
			->where('post_id', $postId)
			->where('comment_parent', null)
			->where('approved', 1)
        ] );
	}

	static public function getNeedsApproval(){
		Comment::all()->where('approved', 0);
	}

	static public function store(Request $request){
		$comment = new Comment( $request->toArray() );
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