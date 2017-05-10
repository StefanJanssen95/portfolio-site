<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
	public $timestamps = false;

	protected $fillable = [
		'name',
	    'description',
	    'blog_cover_id'
	];
}