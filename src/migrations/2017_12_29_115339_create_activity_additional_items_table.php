<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityAdditionalItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_additional_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id');
			$table->string('name', 100);
			$table->decimal('price');
			$table->timestamps();
			$table->boolean('is_poa');
			$table->integer('user_id')->nullable();
			$table->integer('provider_additional_item_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_additional_items');
	}

}
