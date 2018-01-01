<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityCalendarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_calendar', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id');
			$table->integer('venue_id');
			$table->string('name', 100);
			$table->boolean('auto_name');
			$table->text('disabled_dates', 65535);
			$table->boolean('closed_holidays');
			$table->timestamps();
			$table->integer('cloned_from');
			$table->boolean('reenrolled')->nullable()->default(0);
			$table->boolean('is_cloning')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_calendar');
	}

}
