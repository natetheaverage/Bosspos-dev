<?php

use Boss\Pos\Customers\Customer;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

/**
 * Class UserSeeder
 */
class CustomersSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Customer::truncate();

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
			$user = Customer::create([
				'red_card_number'        => $faker->numberBetween(11111111111, 999999999999),
				'red_card_provider'      => $faker->numberBetween(11111111111, 999999999999),
				'red_card_expires'       => $faker->numberBetween(11111111111, 999999999999),
				'identification_number'  => $faker->numberBetween(111111111, 999999999),
				'identification_type'    => $faker->safeColorName,
				'identification_state'   => $faker->state,
				'identification_expires' => $faker->numberBetween(111111111, 999999999),
				'facility_id'             => $faker->numberBetween(111111111, 999999999),
				'created_by'             => $faker->numberBetween(111111111, 999999999),
				'active'          => true,
				'user_id'                => $i,
			]);
		}
	}

	/**
	 * @param $faker
	 */
	private function createNate()
	{
		$user = Customer::create([
			'red_card_number'           => 999999999999,
			'red_card_provider'         => 'Dr.Greenthumb',
			'red_card_expires'          => 07202015,
			'identification_number'         => 951032999,
			'identification_type'       => 'liscense',
			'identification_state'      => 'Colorado',
			'identification_expires' => 12242015,
			'facility_id'                => 1,
			'created_by'                => 'self',
			'active'             => true,
			'user_id'                   => 1,
		]);
	}

}
