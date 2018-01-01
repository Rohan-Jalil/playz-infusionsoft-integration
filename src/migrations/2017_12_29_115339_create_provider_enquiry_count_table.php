<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderEnquiryCountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_enquiry_count', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('provider_id')->index('provider_id');
			$table->integer('year');
			$table->integer('month');
			$table->integer('count');
			$table->index(['provider_id','year','month']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provider_enquiry_count');
	}

}
