<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWaitingListExpiredTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('waiting_list_expired', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id')->index('activity_id');
			$table->string('type', 30);
			$table->integer('object_id');
			$table->integer('owner_id');
			$table->string('firstname', 150);
			$table->string('lastname', 150);
			$table->string('email', 150);
			$table->string('code', 50);
			$table->integer('position');
			$table->text('included_events', 65535);
			$table->dateTime('expire_on')->nullable();
			$table->string('status', 30);
			$table->timestamps();
			$table->dateTime('sent_on')->nullable();
			$table->integer('slots_allocated')->default(1);
			$table->string('invite_message', 500);
			$table->integer('person_id');
			$table->index(['type','object_id'], 'waiting_list_entry_type_object_id_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('waiting_list_expired');
	}

}
