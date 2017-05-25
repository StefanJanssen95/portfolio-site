<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('response_to_id')->nullable();
            $table->string('author_name');
	        $table->string('author_email');
	        $table->text('message');
	        $table->dateTime('datetime');
	        $table->boolean('approved')->default(0);
	        $table->boolean('notify_approved')->default(0);
	        $table->boolean('notify_reply')->default(0);

	        $table->foreign('response_to_id')->references('id')->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
