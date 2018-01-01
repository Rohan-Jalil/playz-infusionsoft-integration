<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostcodeLookupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postcode_lookup', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('postcode')->index('postcode');
			$table->string('name', 200);
			$table->decimal('lat', 11, 8);
			$table->decimal('lng', 11, 8);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('postcode_lookup');
	}

}
