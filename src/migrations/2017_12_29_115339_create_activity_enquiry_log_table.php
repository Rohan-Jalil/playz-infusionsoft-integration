<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityEnquiryLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_enquiry_log', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id');
			$table->integer('user_id');
			$table->string('subject');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email');
			$table->string('ipaddress');
			$table->text('message', 65535);
			$table->string('telephone', 30);
			$table->boolean('subscribe');
			$table->integer('postcode');
			$table->timestamps();
			$table->string('title');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_enquiry_log');
	}

}
