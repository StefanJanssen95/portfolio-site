<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
        	$table->increments('id');
        	$table->string('name', 100);
	        $table->text('description');
        	$table->dateTime('published_at');
        	$table->unsignedInteger('blog_cover_id');
        	$table->string('markdown_path', 255);
        	$table->string('html_path', 255);


	        $table->foreign('blog_cover_id')->references('id')->on('blog_covers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
