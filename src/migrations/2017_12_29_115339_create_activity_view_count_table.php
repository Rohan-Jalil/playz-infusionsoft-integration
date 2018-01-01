<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityViewCountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_view_count', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('provider_id')->index('provider_id');
			$table->integer('activity_id')->index('activity_id');
			$table->integer('year');
			$table->integer('month');
			$table->integer('day')->default(1);
			$table->integer('count');
			$table->index(['provider_id','activity_id','year','month'], 'report_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_view_count');
	}

}
