<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_meta', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('key', 150)->index('user_id');
			$table->text('value', 16777215);
			$table->boolean('is_json')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_meta');
	}

}
