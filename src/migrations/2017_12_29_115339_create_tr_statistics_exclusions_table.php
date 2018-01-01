<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrStatisticsExclusionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tr_statistics_exclusions', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->date('date')->index('date');
			$table->string('reason')->nullable()->index('reason');
			$table->bigInteger('count');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tr_statistics_exclusions');
	}

}
