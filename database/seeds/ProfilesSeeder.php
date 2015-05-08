<?php

use Bosspos\Profiles\Profile;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


/**
 * Class UserSeeder
 */
class ProfilesSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Profile::truncate();

		$this->createNate();

		$this->createFakerProfiles(11);
	}

	/**
	 *
	 */
	private static function createFakerProfiles($amount)
	{
		$faker = Faker::create();

		for ($i = 2; $i <= $amount; $i ++)
		{
			$user = Profile::create([
				'first_name'     => $faker->firstName,                //20
				'last_name'      => $faker->lastName,                    //20
				'phone'          => $faker->phoneNumber,
				'address_street' => $faker->streetAddress,            //25
				'address_city'   => $faker->city,                    //25
				'address_state'  => $faker->state,                    //25
				'address_zip'    => $faker->numberBetween(11111, 99999),
				'dob'            => $faker->dateTimeThisCentury,
				'user_id'        => $i,
			]);
		}
	}

	/**
	 * @param $faker
	 */
	private function createNate()
	{
		$user = Profile::create([
			'first_name'     => 'Nathan',                //20
			'last_name'      => 'leite',                    //20
			'phone'          => '7205606882',
			'address_street' => '1234 some st.',            //25
			'address_city'   => 'Denver',                    //25
			'address_state'  => 'Co.',                    //25
			'address_zip'    => 80223,
			'dob'            => 12241979,
			'user_id'        => 1,

		]);
	}

}
