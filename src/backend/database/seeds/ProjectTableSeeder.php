<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$projects = [
		    [
			    "name" => "Portfolio website",
			    "description" => "The website you are looking at right now.",
			    "image" => "projects/portfolio.png"
		    ],
	    ];
    	foreach( $projects as $project ){
		    DB::table('projects')->insert($project);
	    }
    }
}
