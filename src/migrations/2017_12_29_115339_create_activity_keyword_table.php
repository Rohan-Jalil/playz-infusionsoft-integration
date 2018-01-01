<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityKeywordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_keyword', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_keyword_item_id');
			$table->integer('activity_id');
			$table->unique(['activity_id','activity_keyword_item_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_keyword');
	}

}
