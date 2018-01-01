<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderTimeslotPriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_timeslot_price', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->index();
			$table->string('name');
			$table->string('type');
			$table->decimal('price', 10);
			$table->boolean('is_deleted')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provider_timeslot_price');
	}

}
