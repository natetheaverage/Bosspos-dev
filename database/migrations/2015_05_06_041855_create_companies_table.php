<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 40);
			$table->string('type', 40);
			$table->integer('ein');
			$table->integer('phone');
			$table->integer('fax');
			$table->string('address_street');
			$table->string('address_city', 55);
			$table->string('address_state', 45);
			$table->integer('address_zip');
			$table->string('owner_id');
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
		Schema::drop('companies');
	}

}
