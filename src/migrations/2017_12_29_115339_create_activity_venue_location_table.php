<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityVenueLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_venue_location', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('venue_id')->index();
			$table->decimal('lat', 11, 8);
			$table->decimal('lng', 11, 8);
			$table->float('radius', 10);
			$table->string('address_1', 100);
			$table->string('address_2', 100);
			$table->string('suburb', 100);
			$table->integer('postcode');
			$table->string('state', 100);
			$table->string('country', 200);
			$table->timestamps();
			$table->index(['venue_id','lat','lng']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_venue_location');
	}

}
