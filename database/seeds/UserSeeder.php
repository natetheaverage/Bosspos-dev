<?php

use Boss\Pos\Users\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


/**
 * Class UserSeeder
 */
class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::truncate();

		$this->createNate();

		$this->createFakerUsers(10);
	}

	/**
	 *
	 */
	private static function createFakerUsers($amount)
	{

		$faker = Faker::create();

		for ($i = 1; $i <= $amount; $i ++)
		{
			$user = User::create([
				'username'                  => $faker->userName,
				'email'                     => $faker->safeEmail,
				'password'                  => bcrypt('password'),
				'facility_id'               => 1,
				'role_id'                   => 1,
			]);
		}
	}

	/**
	 * @param $faker
	 */
	private function createNate()
	{
		$user = User::create([
			'username'                  => 'NateTheAverage',
			'email'                     => "natetheaverage@gmail.com",
			'password'                  => bcrypt('123456'),
			'facility_id'               => 1,
			'role_id'                   => 1,
		]);
	}

}
