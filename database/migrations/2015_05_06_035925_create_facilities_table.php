<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facilities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 40);
			$table->string('type', 40);
			$table->integer('license_number');
			$table->integer('license_expiration');
			$table->integer('phone');
			$table->integer('fax');
			$table->string('site_url');
			$table->string('address_street');
			$table->string('address_city', 55);
			$table->string('address_state', 45);
			$table->integer('address_zip');
			$table->string('picture', 40);
			$table->string('company_id');
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
		Schema::drop('facilities');
	}

}
