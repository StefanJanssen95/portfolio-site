<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(UsersTableSeeder::class);
	    $this->call(WelcomeTextTableSeeder::class);
	    $this->call(ProjectTableSeeder::class);
    }
}
