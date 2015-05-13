<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->index();
			$table->string('item')->index();
			$table->string('name')->index();
			$table->string('type');
			$table->string('default')->index();
			$table->string('action');
			$table->string('extra1');
			$table->string('extra2');
			$table->string('owner_id');
			$table->string('owner_type');
			$table->morphs('taggable');
			$table->softDeletes();
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
		Schema::drop('lists');
	}

}
