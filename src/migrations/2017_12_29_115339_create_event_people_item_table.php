<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventPeopleItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_people_item', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('event_booking_id')->index('event_id');
			$table->integer('people_id')->index('order_id');
			$table->integer('additional_item_id')->index('additional_item_id');
			$table->integer('quantity');
			$table->decimal('price', 10);
			$table->decimal('total', 10);
			$table->string('name', 300);
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
		Schema::drop('event_people_item');
	}

}
