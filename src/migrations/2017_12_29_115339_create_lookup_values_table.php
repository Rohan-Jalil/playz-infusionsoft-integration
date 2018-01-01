<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLookupValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lookup_values', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('lookup_id');
			$table->string('value', 500);
			$table->boolean('is_deleted')->default(0);
			$table->boolean('is_default')->default(0);
			$table->integer('priority')->default(10);
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
		Schema::drop('lookup_values');
	}

}
