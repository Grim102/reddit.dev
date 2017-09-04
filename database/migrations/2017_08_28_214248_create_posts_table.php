<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 100);
			$table->string('url');
			$table->string('abstract');
			$table->text('content');
			$table->integer('created_by')->unsigned();
			$table->string('created_at');
			$table->string('updated_at');
		});
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
	{
		Schema::drop('posts');
    }
}
