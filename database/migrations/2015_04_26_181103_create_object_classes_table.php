<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectClassesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('object_classes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('object_id')->index();
			$table->string('object_type')->index();
			$table->integer('class_id')->index();
			$table->string('user_id')->index();
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
		Schema::drop('object_classes');
	}

}
