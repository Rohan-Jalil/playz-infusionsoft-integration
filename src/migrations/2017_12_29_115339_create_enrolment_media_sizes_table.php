<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnrolmentMediaSizesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enrolment_media_sizes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('enrolment_media_id');
			$table->string('dimension', 60)->default('default');
			$table->string('filename', 500);
			$table->string('s3_key', 300);
			$table->string('file_type', 20);
			$table->integer('file_size');
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
		Schema::drop('enrolment_media_sizes');
	}

}
