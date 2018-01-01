<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderCouponsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_coupons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type', 30);
			$table->boolean('time_limited');
			$table->boolean('available');
			$table->integer('use_count');
			$table->integer('usage_limit');
			$table->boolean('discounts_allowed');
			$table->string('usage_type', 30);
			$table->string('prefix', 50);
			$table->string('coupon_code', 250)->index();
			$table->boolean('is_random');
			$table->dateTime('expires_at')->nullable();
			$table->decimal('amount', 10);
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
		Schema::drop('provider_coupons');
	}

}
