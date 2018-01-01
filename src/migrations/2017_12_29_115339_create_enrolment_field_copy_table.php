<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnrolmentFieldCopyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enrolment_field_copy', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 300);
			$table->text('meta', 16777215);
			$table->text('comment', 16777215);
			$table->boolean('autocomplete')->default(1);
			$table->boolean('autofill')->default(1);
			$table->boolean('allow_prefill')->default(1);
			$table->string('type', 100);
			$table->integer('group_id')->index('enrolment_field_group_id_index');
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
		Schema::drop('enrolment_field_copy');
	}

}
