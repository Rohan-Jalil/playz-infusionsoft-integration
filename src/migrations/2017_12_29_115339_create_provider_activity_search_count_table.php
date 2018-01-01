<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderActivitySearchCountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_activity_search_count', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('provider_id')->index('provider_id');
			$table->integer('year');
			$table->integer('month');
			$table->integer('count');
			$table->index(['provider_id','year','month'], 'report_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provider_activity_search_count');
	}

}
