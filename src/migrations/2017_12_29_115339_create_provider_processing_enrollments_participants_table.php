<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderProcessingEnrollmentsParticipantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_processing_enrollments_participants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('process_id')->unsigned()->nullable();
			$table->integer('participant_id')->unsigned()->nullable();
			$table->string('first_name', 50)->nullable();
			$table->string('last_name', 50)->nullable()->default('');
			$table->string('email_address', 150)->nullable();
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
		Schema::drop('provider_processing_enrollments_participants');
	}

}
