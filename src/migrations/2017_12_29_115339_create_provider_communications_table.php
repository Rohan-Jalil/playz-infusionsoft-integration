<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderCommunicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_communications', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type');
			$table->string('subject');
			$table->text('content', 65535);
			$table->integer('provider_id')->unsigned();
			$table->timestamps();
			$table->string('contact_name')->nullable();
			$table->integer('waiting_list_entry_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provider_communications');
	}

}
