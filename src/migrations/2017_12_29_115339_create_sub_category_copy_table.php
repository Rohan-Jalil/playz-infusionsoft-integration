<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubCategoryCopyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sub_category_copy', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 53)->default('');
			$table->integer('is_main')->default(0);
			$table->integer('sort_order');
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
		Schema::drop('sub_category_copy');
	}

}
