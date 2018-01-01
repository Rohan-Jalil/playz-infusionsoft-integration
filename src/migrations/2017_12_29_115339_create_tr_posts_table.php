<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tr_posts', function(Blueprint $table)
		{
			$table->bigInteger('ID', true)->unsigned();
			$table->bigInteger('post_author')->unsigned()->default(0)->index('post_author');
			$table->dateTime('post_date');
			$table->dateTime('post_date_gmt');
			$table->text('post_content');
			$table->text('post_title', 16777215);
			$table->text('post_excerpt', 16777215);
			$table->string('post_status', 20)->default('publish');
			$table->string('comment_status', 20)->default('open');
			$table->string('ping_status', 20)->default('open');
			$table->string('post_password', 20)->default('');
			$table->string('post_name', 200)->default('')->index('post_name');
			$table->text('to_ping', 16777215);
			$table->text('pinged', 16777215);
			$table->dateTime('post_modified');
			$table->dateTime('post_modified_gmt');
			$table->text('post_content_filtered');
			$table->bigInteger('post_parent')->unsigned()->default(0)->index('post_parent');
			$table->string('guid')->default('');
			$table->integer('menu_order')->default(0);
			$table->string('post_type', 20)->default('post');
			$table->string('post_mime_type', 100)->default('');
			$table->bigInteger('comment_count')->default(0);
			$table->index(['post_type','post_status','post_date','ID'], 'type_status_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tr_posts');
	}

}
