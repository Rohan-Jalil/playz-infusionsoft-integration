<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id')->index();
			$table->integer('package_id')->index();
			$table->string('name', 100);
			$table->string('recurring_id', 30)->index();
			$table->string('type', 30);
			$table->string('per_message', 30);
			$table->dateTime('event_start');
			$table->dateTime('event_end');
			$table->dateTime('term_start_date');
			$table->dateTime('recurr_stop_date');
			$table->string('date_type', 10);
			$table->string('day_of_week', 3)->index();
			$table->string('recurring_frequency', 20);
			$table->decimal('price', 10);
			$table->decimal('price_child', 10);
			$table->string('price_type', 10);
			$table->integer('booked_slots');
			$table->integer('total_slots');
			$table->boolean('is_unlimited')->default(0);
			$table->boolean('is_package_only')->default(1);
			$table->boolean('is_term')->default(0);
			$table->integer('inc_children');
			$table->string('selected_days', 100);
			$table->string('status', 30)->default('DRAFT')->index();
			$table->timestamps();
			$table->dateTime('expire_time');
			$table->integer('expire_time_value');
			$table->string('expire_time_unit', 10);
			$table->string('recurr_spec_days_settings', 300);
			$table->integer('overridden');
			$table->integer('timeslot_id');
			$table->integer('calendar_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_events');
	}

}
