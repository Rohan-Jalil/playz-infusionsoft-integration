<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitySimpleEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_simple_events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id')->index('activity_event_days_activity_id_index');
			$table->string('start', 10);
			$table->string('end', 10);
			$table->string('selected_days', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_simple_events');
	}

}
