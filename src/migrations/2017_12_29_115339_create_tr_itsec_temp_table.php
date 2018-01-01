<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrItsecTempTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tr_itsec_temp', function(Blueprint $table)
		{
			$table->bigInteger('temp_id', true)->unsigned();
			$table->string('temp_type', 20);
			$table->dateTime('temp_date');
			$table->dateTime('temp_date_gmt')->index('temp_date_gmt');
			$table->string('temp_host', 40)->nullable()->index('temp_host');
			$table->bigInteger('temp_user')->unsigned()->nullable()->index('temp_user');
			$table->string('temp_username', 60)->nullable()->index('temp_username');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tr_itsec_temp');
	}

}
