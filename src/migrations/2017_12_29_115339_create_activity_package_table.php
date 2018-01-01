<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityPackageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_package', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id')->index();
			$table->string('name', 100);
			$table->string('package_per', 100);
			$table->decimal('cost', 10);
			$table->string('color', 6);
			$table->timestamps();
			$table->softDeletes();
			$table->boolean('is_pro_rata');
			$table->decimal('pro_rata_price', 10);
			$table->integer('calendar_id');
			$table->integer('price_id');
			$table->integer('cloned_from')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_package');
	}

}
