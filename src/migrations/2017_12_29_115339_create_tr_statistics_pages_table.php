<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrStatisticsPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tr_statistics_pages', function(Blueprint $table)
		{
			$table->string('uri')->index('url');
			$table->date('date')->index('date');
			$table->integer('count');
			$table->integer('id')->index('id');
			$table->unique(['date','uri'], 'date_2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tr_statistics_pages');
	}

}
