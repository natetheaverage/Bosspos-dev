<?php

namespace App\Repositories;
/*
* NewUserFieldsRepo.php for bosspos1.3
* By: natetheaverage
* created: 4/12/15
*/

use App\InterfaceObject;
use Faker\Factory as Faker;
use App\Interfaces\FieldsRepoInterface;

class NewUserFieldsRepo implements FieldsRepoInterface {

    public $fields;

    public $fillerInfo;

	/**
	 * Put together a collection for building forms
	 *
	 * @param $menu_name
	 * @return mixed
	 */
	public function createFields($menu_name)
    {

		$fields = InterfaceObject::where('menu_name', $menu_name)->get();
		$fields->push($this->sectionCount($fields));
		$fields->push($this->fillerInfo($menu_name));


        return $fields;
    }

	/**
	 * Fake info to populate fields during testing
	 *
	 * @param $menu_name
	 * @return array
	 */
	public function fillerInfo($menu_name)
    {
        $faker = Faker::create();
        if (env('APP_TEST') and $menu_name == 'registrationFields')
        {
            $fillerInfo = [
                1=>[
                    'username' => $faker->userName,
                    'email' => $faker->safeEmail,
                    'password' => 'password',
                    'password_confirmation' => 'password',
                ],
                2=>[
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'phone' => $faker->phoneNumber,
                    'address_street' => $faker->streetAddress,
                    'address_city' => $faker->city,
                    'address_zip' => $faker->numberBetween(11111, 99999),
                    'dob' => $faker->numberBetween(12341234, 98989876),
                ],
                3=>[
                    'title' => $faker->safeColorName,
                    'roles' => 'super',
                    'badge_number' => $faker->numberBetween(111111111111, 999999999999),
                    'badge_type' => $faker->safeColorName,
                    'ss' => 111222333,
                    'wage' => $faker->numberBetween(10, 30),
                    'location_id' => $faker->numberBetween(1111, 9999),
                ],
                4=>[

                    'promotion_approval' => $faker->boolean(),
                    'point_member_id' => $faker->numberBetween(111111111111, 999999999999),
                    'red_card_number' => $faker->numberBetween(11111111111, 999999999999),
                    'red_card_provider' => $faker->numberBetween(11111111111, 999999999999),
                    'red_card_expires' => $faker->numberBetween(11111111111, 999999999999),
                    'identification_number' => $faker->numberBetween(111111111, 999999999),
                    'identification_type' => $faker->safeColorName,
                    'identification_state'  => $faker->state,
                    'identification_expires' => $faker->numberBetween(111111111, 999999999),
                    'location_id' => $faker->numberBetween(111111111, 999999999),
                    'created_date' => $faker->numberBetween(12341234, 98989876),
                    'created_by' => $faker->numberBetween(111111111, 999999999),
                    'active' => 1,
                ],
            ];
            return ['fakeInfo' => $fillerInfo];
        }

        //TODO: make a default filler list for each menu
        return $fillerInfo = [];
    }

	/**
	 * Count field sections
	 *
	 * @param $fields
	 */
	private function sectionCount($fields)
	{
		$sections = [];
		foreach ($fields as $field)
		{
			array_push($sections, [$field->menu_id]);
		}

		return ['sectionCount' => count(array_unique($sections, 0))];
	}

}