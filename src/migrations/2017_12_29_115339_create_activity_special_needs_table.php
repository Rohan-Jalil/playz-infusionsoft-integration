<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitySpecialNeedsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_special_needs', function(Blueprint $table)
		{
			$table->integer('activity_id');
			$table->integer('special_needs_id');
			$table->string('other_name', 100);
			$table->string('catering_for', 40);
			$table->timestamps();
			$table->index(['activity_id','special_needs_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_special_needs');
	}

}
