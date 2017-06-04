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

	static public function allNotApproved(){
		return response()->json( Comment::all()->where('approved', 0));
	}

	static public function allApproved(){
		return response()->json( Comment::all()->where('approved', 1) );
	}

	static public function approve($id){
		$comment = Comment::find($id);
		$comment->approved = 1;
		if( $comment->save() ){
			return response()->json( [ 'message'=>'Comment approved' ] );
		}
		return response()->json( [ 'message'=>'Comment couldn\'t be approved' ], 500 );
	}

	static public function delete($id){
		if( Comment::find($id)->delete() ){
			return response()->json( [ 'message'=>'Comment deleted' ] );
		}
		return response()->json( [ 'message'=>'Comment couldn\'t be deleted' ], 500 );
	}

	static public function store(Request $request){
		$comment = new Comment( $request->toArray() );
		// TODO: Approve if user is signed in (so admin)
//		if( Auth::user() ){
//			$comment->approved = 1;
//			$comment->notify_approval = 0;
//			$comment->notify_reply = 0;
//		}
		if( $comment->save() ){
			return response()->json(['comment' => $comment]);
		} else {
			return response()->json(['message' => 'Something unexpected happened'], 500);
		}

	}
}