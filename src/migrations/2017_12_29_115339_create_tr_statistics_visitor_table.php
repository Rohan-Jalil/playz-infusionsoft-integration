<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrStatisticsVisitorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tr_statistics_visitor', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->date('last_counter');
			$table->text('referred', 65535);
			$table->string('agent')->index('agent');
			$table->string('platform')->nullable()->index('platform');
			$table->string('version')->nullable()->index('version');
			$table->string('UAString')->nullable();
			$table->string('ip', 60);
			$table->string('location', 10)->nullable()->index('location');
			$table->integer('hits')->nullable();
			$table->integer('honeypot')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tr_statistics_visitor');
	}

}
