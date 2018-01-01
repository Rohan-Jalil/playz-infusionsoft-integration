<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderAdditionalItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_additional_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->decimal('price', 10);
			$table->boolean('is_poa')->default(0);
			$table->integer('user_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provider_additional_items');
	}

}
