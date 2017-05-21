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

	public function cover(){
		return $this->hasOne(BlogCover::class);
	}

	public function tags(){
		return $this->belongsToMany(BlogTag::class, 'blog_has_tags');
	}
}