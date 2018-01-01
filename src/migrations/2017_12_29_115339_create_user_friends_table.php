<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserFriendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_friends', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('friend_id');
			$table->timestamps();
			$table->index(['user_id','friend_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_friends');
	}

}
