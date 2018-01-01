<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityCalendarKeyDatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_calendar_key_dates', function(Blueprint $table)
		{
			$table->integer('key_date_id');
			$table->integer('calendar_id');
			$table->index(['key_date_id','calendar_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_calendar_key_dates');
	}

}
