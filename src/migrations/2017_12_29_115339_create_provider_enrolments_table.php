<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderEnrolmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_enrolments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('process_enrolment_id')->unsigned()->nullable();
			$table->integer('participant_enroll_process_id')->unsigned()->nullable();
			$table->string('event_type', 20)->nullable();
			$table->integer('session_id')->unsigned()->nullable();
			$table->integer('package_id')->unsigned()->nullable();
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
		Schema::drop('provider_enrolments');
	}

}
