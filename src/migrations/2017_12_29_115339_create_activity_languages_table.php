<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityLanguagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_languages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id');
			$table->integer('language_id');
			$table->timestamps();
			$table->unique(['activity_id','language_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_languages');
	}

}
