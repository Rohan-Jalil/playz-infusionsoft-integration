<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->decimal('sub_total', 10);
			$table->decimal('discounts', 10);
			$table->decimal('total', 10);
			$table->integer('coupon_id')->index('coupon_id');
			$table->string('type', 30);
			$table->integer('user_id')->index('user_id');
			$table->integer('activity_id')->index('activity_id');
			$table->string('activity_name', 200);
			$table->integer('enrolment_form_id');
			$table->integer('invite_id');
			$table->string('status', 30)->default('DRAFT')->index('order_status');
			$table->string('cart_id', 64);
			$table->string('pay_key', 400);
			$table->dateTime('completed_at');
			$table->timestamps();
			$table->string('comments', 600);
			$table->decimal('provider_amount', 10);
			$table->decimal('playz_amount', 10);
			$table->decimal('gst_amount', 10);
			$table->boolean('includes_gst');
			$table->text('selected_objects', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
