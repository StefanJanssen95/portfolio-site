<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
	public $timestamps = false;

	protected $fillable = [
		'post_id',
		'comment_parent',
		'author_name',
		'author_email',
		'message',
	    'notify_approval',
	    'notify_reply',
	];

	public function replies(){
		return $this->hasMany(Comment::class, 'comment_parent');
	}

	public function blogPost() {
		return $this->belongsTo(BlogPost::class);
	}

	public function getAuthorNameAttribute($value){
		return strtoupper($value);
	}
}
