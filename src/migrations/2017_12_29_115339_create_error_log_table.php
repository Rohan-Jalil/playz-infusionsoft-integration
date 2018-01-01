<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateErrorLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('error_log', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('error', 5000);
			$table->string('url', 1000);
			$table->string('error_file', 1000);
			$table->string('user_ip', 40);
			$table->integer('line_no');
			$table->string('browser_useragent', 500);
			$table->string('browser_app_version', 500);
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
		Schema::drop('error_log');
	}

}
