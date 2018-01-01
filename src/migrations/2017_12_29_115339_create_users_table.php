<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('firstname', 100);
			$table->string('lastname', 100);
			$table->string('business_name', 200);
			$table->string('business_slug', 150);
			$table->string('address_1', 250);
			$table->string('address_2', 250)->nullable();
			$table->string('suburb', 250);
			$table->string('state', 100);
			$table->string('postcode', 50);
			$table->string('country', 100);
			$table->string('phone_number', 20);
			$table->string('status', 50)->default('ACTIVE');
			$table->string('registration_status', 50);
			$table->string('type', 20);
			$table->string('remember_token', 250)->nullable();
			$table->string('reset_password')->nullable();
			$table->dateTime('last_seen')->nullable();
			$table->timestamps();
			$table->string('verify_token', 250)->nullable();
			$table->string('facebook_uid', 250)->nullable();
			$table->string('google_uid', 250)->nullable();
			$table->boolean('gst_registered');
			$table->string('stripe_user_id', 40)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
