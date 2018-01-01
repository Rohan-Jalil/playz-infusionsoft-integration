<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTermDateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('term_date', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('year');
			$table->integer('holiday');
			$table->string('state');
			$table->dateTime('start');
			$table->dateTime('end');
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
		Schema::drop('term_date');
	}

}
