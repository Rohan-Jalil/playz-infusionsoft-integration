<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('people', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->index();
			$table->string('firstname', 200);
			$table->string('lastname', 200);
			$table->string('type', 20);
			$table->dateTime('dob');
			$table->integer('parent_id');
			$table->integer('order_id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('email');
			$table->string('provider_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('people');
	}

}
