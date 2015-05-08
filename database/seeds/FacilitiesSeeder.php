<?php

use App\Facility;
use App\Mc;
use App\Mip;
use App\Opc;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


/**
 * Class UserSeeder
 */
class FacilitiesSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Facility::truncate();

		$this->createFakerProfiles();
	}

	/**
	 *
	 */
	private static function createFakerProfiles()
	{
		$faker = Faker::create();

		$user = Facility::create([
			'name'               => 'Frosted Dreams',                //20
			'type'               => 'MMC',                    //20
			'license_number'     => $faker->numberBetween(1111111, 9999999),                    //20
			'license_expiration' => $faker->creditCardExpirationDate,                    //20
			'phone'              => $faker->phoneNumber,
			'fax'                => $faker->phoneNumber,
			'site_url'           => 'http://www.frosteddreams.com',
			'address_street'     => '420 East Colfax Avenue',            //25
			'address_city'       => 'Denver',                    //25
			'address_state'      => 'Colorado',                    //25
			'address_zip'        => 80231,
			'picture'            => '/img/facilities/F/FrostedDreamsLLC/building.jpg',
			'company_id'         => 1,
		]);
		$user = Mc::create([
			'facility_id' => 1,
		]);

		$user = Facility::create([
			'name'               => 'Frosted Dreams',                //20
			'type'               => 'RMC',                    //20
			'license_number'     => $faker->numberBetween(1111111, 9999999),                    //20
			'license_expiration' => $faker->creditCardExpirationDate,                    //20
			'phone'              => $faker->phoneNumber,
			'fax'                => $faker->phoneNumber,
			'site_url'           => 'http://www.frosteddreams.com',
			'address_street'     => '420 East Colfax Avenue',            //25
			'address_city'       => 'Denver',                    //25
			'address_state'      => 'Colorado',                    //25
			'address_zip'        => 80231,
			'picture'            => '/img/facilities/F/FrostedDreamsLLC/building.jpg',
			'company_id'         => 1,
		]);
		$user = Mc::create([
			'facility_id' => 2,
		]);

		$user = Facility::create([
			'name'               => 'Frosted Dreams',                //20
			'type'               => 'MMIP',                    //20
			'license_number'     => $faker->numberBetween(1111111, 9999999),                    //20
			'license_expiration' => $faker->creditCardExpirationDate,                    //20
			'phone'              => $faker->phoneNumber,
			'fax'                => $faker->phoneNumber,
			'site_url'           => 'http://www.frosteddreams.com',
			'address_street'     => '420 East Colfax Avenue',            //25
			'address_city'       => 'Denver',                    //25
			'address_state'      => 'Colorado',                    //25
			'address_zip'        => 80231,
			'picture'            => '/img/facilities/F/FrostedDreamsLLC/building.jpg',
			'company_id'         => 1,
		]);
		$user = Mip::create([
			'facility_id' => 3,
		]);

		$user = Facility::create([
			'name'               => 'Frosted Dreams',                //20
			'type'               => 'RMIP',                    //20
			'license_number'     => $faker->numberBetween(1111111, 9999999),                    //20
			'license_expiration' => $faker->creditCardExpirationDate,                    //20
			'phone'              => $faker->phoneNumber,
			'fax'                => $faker->phoneNumber,
			'site_url'           => 'http://www.frosteddreams.com',
			'address_street'     => '420 East Colfax Avenue',            //25
			'address_city'       => 'Denver',                    //25
			'address_state'      => 'Colorado',                    //25
			'address_zip'        => 80231,
			'picture'            => '/img/facilities/F/FrostedDreamsLLC/building.jpg',
			'company_id'         => 1,
		]);
		$user = Mip::create([
			'facility_id' => 4,
		]);

		$user = Facility::create([
			'name'               => 'Frosted Dreams',                //20
			'type'               => 'MOPC',                    //20
			'license_number'     => $faker->numberBetween(1111111, 9999999),                    //20
			'license_expiration' => $faker->creditCardExpirationDate,                    //20
			'phone'              => $faker->phoneNumber,
			'fax'                => $faker->phoneNumber,
			'site_url'           => 'http://www.frosteddreams.com',
			'address_street'     => '420 East Colfax Avenue',            //25
			'address_city'       => 'Denver',                    //25
			'address_state'      => 'Colorado',                    //25
			'address_zip'        => 80231,
			'picture'            => '/img/facilities/F/FrostedDreamsLLC/building.jpg',
			'company_id'         => 1,
		]);
		$user = Opc::create([
			'facility_id' => 5,
		]);

		$user = Facility::create([
			'name'               => 'Frosted Dreams',                //20
			'type'               => 'ROPC',                    //20
			'license_number'     => $faker->numberBetween(1111111, 9999999),                    //20
			'license_expiration' => $faker->creditCardExpirationDate,                    //20
			'phone'              => $faker->phoneNumber,
			'fax'                => $faker->phoneNumber,
			'site_url'           => 'http://www.frosteddreams.com',
			'address_street'     => '420 East Colfax Avenue',            //25
			'address_city'       => 'Denver',                    //25
			'address_state'      => 'Colorado',                    //25
			'address_zip'        => 80231,
			'picture'            => '/img/facilities/F/FrostedDreamsLLC/building.jpg',
			'company_id'         => 1,
		]);
		$user = Opc::create([
			'facility_id' => 6,
		]);

	}

}
