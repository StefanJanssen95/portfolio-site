<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {
	public $timestamps = false;

	protected $fillable = [
		'name',
		'description',
	    'image',
	    'github',
	    'gitlab',
	    'site',
	];

	public function tags(){
		return $this->belongsToMany(ProjectTag::class, 'project_has_tags');
	}

	public function getImageAttribute($value){
		return asset("/images/projects/$value", true);
	}
}