<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderPartnerActivityPricingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_partner_activity_pricing', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id')->unsigned()->nullable();
			$table->integer('user_id')->unsigned()->nullable();
			$table->string('type')->nullable();
			$table->decimal('price', 10)->unsigned()->nullable();
			$table->boolean('is_default')->nullable()->default(0);
			$table->boolean('is_deleted')->nullable()->default(0);
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
		Schema::drop('provider_partner_activity_pricing');
	}

}
