<?php namespace Boss\Repositories;

use Boss\InterfaceObject;
use Boss\Lists;
use Faker\Factory as Faker;
use Boss\Interfaces\FieldsRepoInterface;

/**
 * Class NewUserFieldsRepo
 * @package Boss\Repositories
 */
class NewUserFieldsRepo implements FieldsRepoInterface {

	public $fields;

	public $fillerInfo;

	public $fullCollection;

	function __construct(InterfaceObject $fields)
	{
		$this->fields = $fields;
	}

	/**
	 * Put together a collection for building forms
	 *
	 * @param $menu_name
	 * @return mixed
	 */
	public function createFields($menu_name, $categories = [''])
    {
		$fields = $this->fields->whereMenu_nameAndExtra1($menu_name, $categories[1])->get();

		foreach($categories as $category)
		{
			$fields->push($this->fields->whereMenu_nameAndExtra1($menu_name, key($category))->get());
		}

		$fields->push(['sectionCount' => count($categories)]);

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
                'login' =>[
                    'username' => $faker->userName,
                    'email' => $faker->safeEmail,
                    'password' => 'password',
                    'password_confirmation' => 'password',
                ],
                'profile' =>[
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'phone' => $faker->phoneNumber,
                    'address_street' => $faker->streetAddress,
                    'address_city' => $faker->city,
                    'address_zip' => $faker->numberBetween(11111, 99999),
                    'dob' => $faker->numberBetween(12341234, 98989876),
                ],
                'employee' =>[
                    'title' => $faker->safeColorName,
                    'roles' => 'super',
                    'badge_number' => $faker->numberBetween(111111111111, 999999999999),
                    'badge_type' => $faker->safeColorName,
                    'ss' => 111222333,
                    'wage' => $faker->numberBetween(10, 30),
                    'location_id' => $faker->numberBetween(1111, 9999),
                ],
                'customer' =>[

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
	// TODO Remove this when I am sure I don't need it
	private function sectionCount($fields)
	{
		$sections = [];
		foreach ($fields as $field)
		{
			array_push($sections, [$field->extra1]);
		}
		//dd($sections);
		return ['sectionCount' => count(array_unique($sections, 0))];
	}

}