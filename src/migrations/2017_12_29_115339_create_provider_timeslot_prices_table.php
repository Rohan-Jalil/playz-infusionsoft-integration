<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderTimeslotPricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_timeslot_prices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('timeslot_price_id');
			$table->integer('timeslot_id');
			$table->unique(['timeslot_price_id','timeslot_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provider_timeslot_prices');
	}

}
