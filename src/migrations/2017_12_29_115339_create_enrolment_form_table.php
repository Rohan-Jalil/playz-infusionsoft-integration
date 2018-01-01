<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnrolmentFormTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enrolment_form', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->index();
			$table->string('name', 100);
			$table->string('type', 20);
			$table->boolean('for_holidays');
			$table->boolean('for_classes');
			$table->boolean('for_fun');
			$table->boolean('for_parties');
			$table->timestamps();
			$table->softDeletes();
			$table->boolean('is_default')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enrolment_form');
	}

}
