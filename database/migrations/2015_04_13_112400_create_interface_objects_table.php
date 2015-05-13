<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterfaceObjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('interface_objects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('menu_id')->index();
			$table->string('menu_name')->index();
			$table->integer('menu_order')->index();
			$table->string('family')->index();
			$table->string('type')->index();
			$table->string('name')->index();
			$table->string('class')->nullable();
			$table->string('style')->nullable();
			$table->string('label')->nullable();
			$table->string('value')->nullable();
			$table->text('content')->nullable();
			$table->string('icon')->nullable();
			$table->string('href')->nullable();
			$table->string('disabled')->nullable();
			$table->string('alt')->nullable();
			$table->String('on_click')->nullable();
			$table->String('target')->nullable();
			$table->String('hook')->nullable();
			$table->String('color')->nullable();
			$table->string('extra1')->nullable();
			$table->string('extra2')->nullable();
			$table->string('notification_style')->nullable();
			$table->String('notification_color')->nullable();
			$table->String('notification_text')->nullable();
			$table->integer('owner_id')->nullable();
			$table->string('owner_type')->nullable();
			$table->integer('lists_id')->nullable();
			$table->string('lists_type')->nullable();
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
		Schema::drop('interface_objects');
	}

}
