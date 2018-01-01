<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventBookingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_booking', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('event_id')->index('event_id');
			$table->integer('package_id')->index('package_id');
			$table->integer('order_id')->index('order_id');
			$table->decimal('total', 10);
			$table->decimal('item_price', 10);
			$table->string('status', 20)->index('status');
			$table->timestamps();
			$table->string('firstname', 150);
			$table->string('lastname', 150);
			$table->string('email', 150);
			$table->integer('activity_id')->index();
			$table->integer('person_id')->index();
			$table->string('package_group', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('event_booking');
	}

}
