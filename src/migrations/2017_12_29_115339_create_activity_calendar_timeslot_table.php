<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityCalendarTimeslotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_calendar_timeslot', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('calendar_id');
			$table->string('name');
			$table->string('type', 20);
			$table->text('meta', 65535);
			$table->integer('term_id');
			$table->integer('package_id');
			$table->integer('total_slots')->default(0);
			$table->integer('cloned_from');
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_calendar_timeslot');
	}

}
