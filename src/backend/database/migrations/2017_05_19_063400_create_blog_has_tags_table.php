<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogHasTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_has_tags', function (Blueprint $table) {
            $table->unsignedInteger('blog_id');
	        $table->unsignedInteger('tag_id');

	        $table->foreign('blog_id')->references('id')->on('blog_posts');
	        $table->foreign('tag_id')->references('id')->on('blog_tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_has_tags');
    }
}
