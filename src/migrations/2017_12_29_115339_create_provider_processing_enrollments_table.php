<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderProcessingEnrollmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_processing_enrollments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('provider_id')->unsigned()->nullable();
			$table->text('selected_sessions', 65535)->nullable();
			$table->text('selected_packages', 65535)->nullable();
			$table->text('enrol_to_packages', 65535)->nullable();
			$table->text('enrol_to_sessions', 65535)->nullable();
			$table->string('enrol_method', 8)->nullable();
			$table->string('invite_process', 12)->nullable()->default('');
			$table->text('invite_message', 65535)->nullable();
			$table->dateTime('invite_expiry')->nullable();
			$table->timestamps();
			$table->integer('enrol_from_calendar')->unsigned()->nullable();
			$table->integer('enrol_from_listing')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provider_processing_enrollments');
	}

}
