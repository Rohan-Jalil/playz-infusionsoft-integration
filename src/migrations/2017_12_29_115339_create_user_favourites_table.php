<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserFavouritesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_favourites', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('activity_id');
			$table->timestamps();
			$table->unique(['user_id','activity_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_favourites');
	}

}
