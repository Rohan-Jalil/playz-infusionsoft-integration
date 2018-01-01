<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('sub_cat_id');
			$table->string('name', 200);
			$table->string('slug', 50);
			$table->integer('user_id')->index('user_id');
			$table->integer('venue_id')->index('venue_id');
			$table->text('description', 16777215);
			$table->string('excerpt', 300);
			$table->decimal('rating', 4);
			$table->string('type', 30);
			$table->string('gender', 1)->index();
			$table->integer('start_age');
			$table->integer('end_age');
			$table->string('supervision', 30);
			$table->integer('review_count');
			$table->string('status', 30)->index();
			$table->text('wizard_progress', 65535);
			$table->string('last_wizard_page')->nullable();
			$table->decimal('price', 10);
			$table->boolean('extended_hours_available')->default(0);
			$table->integer('search_count');
			$table->timestamps();
			$table->integer('search_priority');
			$table->integer('active_events');
			$table->integer('total_events');
			$table->boolean('has_active_events');
			$table->index(['start_age','end_age']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activities');
	}

}
