<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTag extends Model {
	public $timestamps = false;

	protected $fillable = [ 'name' ];

	public function projects(){
		return $this->belongsToMany(Project::class, 'project_has_tags');
	}
}