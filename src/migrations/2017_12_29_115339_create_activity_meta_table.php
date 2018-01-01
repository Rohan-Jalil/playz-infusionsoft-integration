<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_meta', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id');
			$table->string('key', 150)->index('activity_id');
			$table->text('value', 16777215);
			$table->boolean('is_json');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_meta');
	}

}
