<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrItsecLockoutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tr_itsec_lockouts', function(Blueprint $table)
		{
			$table->bigInteger('lockout_id', true)->unsigned();
			$table->string('lockout_type', 20);
			$table->dateTime('lockout_start');
			$table->dateTime('lockout_start_gmt');
			$table->dateTime('lockout_expire');
			$table->dateTime('lockout_expire_gmt')->index('lockout_expire_gmt');
			$table->string('lockout_host', 40)->nullable()->index('lockout_host');
			$table->bigInteger('lockout_user')->unsigned()->nullable()->index('lockout_user');
			$table->string('lockout_username', 60)->nullable()->index('lockout_username');
			$table->integer('lockout_active')->default(1)->index('lockout_active');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tr_itsec_lockouts');
	}

}
