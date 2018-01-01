<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrItsecLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tr_itsec_log', function(Blueprint $table)
		{
			$table->bigInteger('log_id', true)->unsigned();
			$table->string('log_type', 20)->default('')->index('log_type');
			$table->string('log_function')->default('');
			$table->integer('log_priority')->default(1);
			$table->dateTime('log_date');
			$table->dateTime('log_date_gmt')->index('log_date_gmt');
			$table->string('log_host', 40)->nullable();
			$table->string('log_username', 60)->nullable();
			$table->bigInteger('log_user')->unsigned()->nullable();
			$table->string('log_url')->nullable();
			$table->string('log_referrer')->nullable();
			$table->text('log_data');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tr_itsec_log');
	}

}
