<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeopleMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('people_meta', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('people_id');
			$table->string('key', 100);
			$table->text('value', 16777215);
			$table->boolean('is_json');
			$table->index(['key','people_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('people_meta');
	}

}
