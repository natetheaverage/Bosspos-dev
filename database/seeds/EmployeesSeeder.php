<?php

use Bosspos\Employees\Employee;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


/**
 * Class UserSeeder
 */
class EmployeesSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Employee::truncate();

		$this->createNate();

		$this->createFakerUsers(11);
	}

	/**
	 *
	 */
	private static function createFakerUsers($amount)
	{
		$faker = Faker::create();

		for ($i = 2; $i <= $amount; $i ++)
		{
			$user = Employee::create([
				'title'                     => $faker->safeColorName,                    //30
				'wage'                      => $faker->numberBetween(10, 30),
				'ss'                        => 111222333,
				'badge_number'         		=> $faker->numberBetween(111111111, 999999999),
				'badge_type'       			=> $faker->safeColorName,
				'facility_id'               => $faker->numberBetween(111111111, 999999999),
				'created_by'                => $faker->numberBetween(111111111, 999999999),
				'active'             		=> $faker->numberBetween(0, 3),
				'user_id'       			 => $i,
				'company_id'       			 => 1,
			]);
		}
	}

	/**
	 * @param $faker
	 */
	private function createNate()
	{
		$user = Employee::create([
			'title'                     => 'Owner',
			'wage'                      => 30.50,
			'ss'                        => 111223333,
			'badge_number'         		=> 951032999,
			'badge_type'       			=> 'key',
			'facility_id'               => 1,
			'created_by'                => 'self',
			'active'       			    => true,
			'user_id'      				  => 1,
			'company_id'      				  => 1,
		]);
	}

}
