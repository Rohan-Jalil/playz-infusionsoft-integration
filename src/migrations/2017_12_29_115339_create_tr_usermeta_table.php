<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrUsermetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tr_usermeta', function(Blueprint $table)
		{
			$table->bigInteger('umeta_id', true)->unsigned();
			$table->bigInteger('user_id')->unsigned()->default(0)->index('user_id');
			$table->string('meta_key')->nullable()->index('meta_key');
			$table->text('meta_value')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tr_usermeta');
	}

}
