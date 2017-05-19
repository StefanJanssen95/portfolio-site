<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCover extends Model {
	public $timestamps = false;

	protected $fillable = [
		'name',
	    'image_path'
	];
}