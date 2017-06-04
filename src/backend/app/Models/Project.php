<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {
	public $timestamps = false;

	protected $fillable = [
		'name',
		'description',
	    'image',
	    'git',
	    'site',
	    'hidden',
	];

	public function tags(){
		return $this->belongsToMany(ProjectTag::class, 'project_has_tags');
	}

	public function getNameAttribute($value){
		return strtoupper($value);
	}
}