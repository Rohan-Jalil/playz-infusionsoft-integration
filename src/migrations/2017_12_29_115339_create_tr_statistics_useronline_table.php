<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrStatisticsUseronlineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tr_statistics_useronline', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('ip', 60);
			$table->integer('created')->nullable();
			$table->integer('timestamp');
			$table->dateTime('date');
			$table->text('referred', 65535);
			$table->string('agent');
			$table->string('platform')->nullable();
			$table->string('version')->nullable();
			$table->string('location', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tr_statistics_useronline');
	}

}
