<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserSearchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_search', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->index();
			$table->string('name', 100);
			$table->string('type', 10);
			$table->boolean('is_saved')->default(0);
			$table->text('search_data', 16777215);
			$table->string('hash', 40);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_search');
	}

}
