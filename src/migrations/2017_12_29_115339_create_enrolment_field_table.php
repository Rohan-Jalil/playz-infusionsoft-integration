<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnrolmentFieldTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enrolment_field', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('order')->nullable();
			$table->boolean('is_default')->nullable()->default(0);
			$table->boolean('legacy')->nullable()->default(0);
			$table->text('name', 65535);
			$table->text('meta', 16777215);
			$table->text('comment', 16777215);
			$table->boolean('autocomplete')->default(1);
			$table->boolean('autofill')->default(1);
			$table->boolean('allow_prefill')->default(1);
			$table->string('type', 100);
			$table->integer('group_id')->index();
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
		Schema::drop('enrolment_field');
	}

}
