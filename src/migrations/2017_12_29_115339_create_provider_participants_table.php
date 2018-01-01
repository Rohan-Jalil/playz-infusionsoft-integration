<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderParticipantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_participants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('provider_id')->index();
			$table->integer('activity_id')->index();
			$table->integer('user_id')->index();
			$table->integer('person_id')->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provider_participants');
	}

}
