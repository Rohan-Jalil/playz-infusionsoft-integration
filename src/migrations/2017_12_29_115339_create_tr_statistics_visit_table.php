<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrStatisticsVisitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tr_statistics_visit', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->dateTime('last_visit');
			$table->date('last_counter')->unique('unique_date');
			$table->integer('visit');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tr_statistics_visit');
	}

}
