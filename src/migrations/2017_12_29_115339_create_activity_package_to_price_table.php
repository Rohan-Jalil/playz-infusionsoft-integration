<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityPackageToPriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_package_to_price', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_package_id');
			$table->integer('provider_timeslot_price_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_package_to_price');
	}

}
