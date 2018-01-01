<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserVisitCountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_visit_count', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->index('user_id');
			$table->integer('year');
			$table->integer('month');
			$table->integer('count');
			$table->index(['user_id','year','month'], 'report_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_visit_count');
	}

}
