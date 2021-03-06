<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model {
	public $timestamps = false;

	protected $fillable = [
		'blog_cover_id',
		'name',
		'description',
	    'publish_date',
	];

	protected $dateFormat = "d-m-Y H:i";

	public function getNameAttribute($value){
		return strtoupper($value);
	}

	public function blog_cover(){
		return $this->belongsTo(BlogCover::class);
	}

	public function tags(){
		return $this->belongsToMany(BlogTag::class, 'blog_has_tags');
	}

	public function nestedComments() {
	    return $this->hasMany(Comment::class)->where('comment_parent', 0);
	}

}