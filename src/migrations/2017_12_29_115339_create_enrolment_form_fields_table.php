<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnrolmentFormFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enrolment_form_fields', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('form_id');
			$table->integer('field_id');
			$table->index(['form_id','field_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enrolment_form_fields');
	}

}
