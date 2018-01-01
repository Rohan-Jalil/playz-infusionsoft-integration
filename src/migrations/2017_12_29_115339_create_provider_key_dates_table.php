<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderKeyDatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_key_dates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->index();
			$table->string('name', 100);
			$table->dateTime('start_date');
			$table->dateTime('end_date');
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
		Schema::drop('provider_key_dates');
	}

}
