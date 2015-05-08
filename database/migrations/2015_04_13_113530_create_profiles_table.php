<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name', 40);
			$table->string('last_name', 40);
			$table->string('profile_picture', 40);
			$table->integer('phone');
			$table->string('address_street');
			$table->string('address_city', 55);
			$table->string('address_state', 45);
			$table->integer('address_zip');
			$table->integer('dob')->nullable();
			$table->string('user_id');
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
		Schema::drop('profiles');
	}

}
