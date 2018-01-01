<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrStatisticsHistoricalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tr_statistics_historical', function(Blueprint $table)
		{
			$table->bigInteger('ID', true);
			$table->string('category', 25)->index('category');
			$table->bigInteger('page_id')->unique('page_id');
			$table->string('uri')->unique('uri');
			$table->bigInteger('value');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tr_statistics_historical');
	}

}
