<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 40)->nullable();
			$table->integer('wage')->nullable();
			$table->integer('badge_number')->nullable();
			$table->string('badge_type')->nullable();
			$table->integer('ss')->nullable();
			$table->integer('facility_id')->nullable();
			$table->integer('created_by')->nullable();
			$table->integer('user_id')->nullable();
			$table->integer('company_id')->nullable();
			$table->integer('active')->nullable();
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
		Schema::drop('employees');
	}

}
