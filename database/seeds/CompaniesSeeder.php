<?php

use Boss\Company;
use Illuminate\Database\Seeder;


/**
 * Class UserSeeder
 */
class CompaniesSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Company::truncate();

		$this->createCompany();
	}

	/**
	 *
	 */
	private static function createCompany()
	{
		$user = Company::create([
			'name'           => 'Marijuana Holdings LLC',                //20
			'type'           => 'Sole LLC',                    //20
			'ein'            => 4200420,
			'phone'          => 7204200420,
			'fax'            => 7204201420,
			'address_street' => '1234 Colfax Ave.',            //25
			'address_city'   => 'Denver',                    //25
			'address_state'  => 'Colorado',                    //25
			'owner_id'       => 1,
		]);

	}


}
