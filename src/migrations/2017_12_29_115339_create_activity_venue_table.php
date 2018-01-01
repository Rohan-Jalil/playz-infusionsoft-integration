<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityVenueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_venue', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->index('user_id');
			$table->string('type', 30);
			$table->string('status', 30);
			$table->string('name', 100);
			$table->string('transport', 200);
			$table->string('transport_other', 500);
			$table->string('shelter', 200);
			$table->string('cooling', 200);
			$table->string('parking', 200);
			$table->boolean('wheelchair_access')->default(0);
			$table->boolean('airco')->default(0);
			$table->boolean('prefilled');
			$table->boolean('has_holidays');
			$table->boolean('has_classes');
			$table->boolean('has_fun');
			$table->boolean('has_parties');
			$table->boolean('public_transport')->default(0);
			$table->boolean('undercover')->default(0);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_venue');
	}

}
