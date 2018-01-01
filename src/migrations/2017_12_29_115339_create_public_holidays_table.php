<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicHolidaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('public_holidays', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->string('state', 10);
			$table->integer('year');
			$table->dateTime('date');
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
		Schema::drop('public_holidays');
	}

}
