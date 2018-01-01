<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityReligionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_religions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id');
			$table->integer('religion_id');
			$table->unique(['activity_id','religion_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_religions');
	}

}
