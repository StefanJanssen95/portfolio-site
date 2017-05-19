<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WelcomeTextTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$texts = [
		    'a full-stack developer.',
		    'a problem solver.',
		    'a game developer.',
		    'an UWP developer.',
		    'a .NET developer.',
		    'a tech enthusiast.',
	    ];
    	foreach( $texts as $text ){
		    DB::table('welcome_texts')->insert([
	           'text' => $text,
	       ]);
	    }
    }
}
