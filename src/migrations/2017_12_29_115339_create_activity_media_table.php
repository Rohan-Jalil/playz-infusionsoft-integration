<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_media', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id');
			$table->string('original_name', 300);
			$table->string('type', 60);
			$table->integer('sort_order');
			$table->string('status', 30);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_media');
	}

}
