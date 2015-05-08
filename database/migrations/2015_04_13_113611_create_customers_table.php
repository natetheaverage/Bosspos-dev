<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('red_card_number')->nullable();
			$table->string('red_card_provider')->nullable();
			$table->date('red_card_expires')->nullable();
			$table->integer('identification_number')->nullable();
			$table->string('identification_type')->nullable();
			$table->string('identification_state')->nullable();
			$table->date('identification_expires')->nullable();
			$table->boolean('active');
			$table->integer('facility_id')->index();
			$table->integer('created_by')->index();
			$table->string('user_id')->index();
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
		Schema::drop('customers');
	}

}
