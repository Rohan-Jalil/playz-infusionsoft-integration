<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderDiscountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_discounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type', 20);
			$table->integer('event_count')->default(0);
			$table->decimal('amount', 12)->default(0.00);
			$table->integer('user_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
			$table->string('discount_type', 20)->default('MULTI_SESSION');
			$table->boolean('multi_is_across_listings')->default(0);
			$table->boolean('multi_is_per_participant')->default(0);
			$table->integer('early_days_prior')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provider_discounts');
	}

}
