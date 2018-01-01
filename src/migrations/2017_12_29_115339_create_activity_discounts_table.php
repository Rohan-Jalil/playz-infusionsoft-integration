<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityDiscountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_discounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id')->index('activity_id');
			$table->string('type', 30);
			$table->integer('event_count');
			$table->decimal('amount', 10);
			$table->timestamps();
			$table->integer('provider_discount_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_discounts');
	}

}
