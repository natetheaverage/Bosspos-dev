<?php

use Boss\InterfaceObject;
use Illuminate\Database\Seeder;

class RegistrationFieldsListSeeder extends Seeder{

	public function run()
	{
		$listTitle = 'registrationFields';
		$listId = 4;
		$category = 'login';

		$list = [
			'errorBox' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'alert',	//'family'
				'errorBox',	//'type'
				'danger',	//'class'
				'Uh Oh',	//'label'
				1,	//'owner_id'
				'Average',	//'owner_type
			],
			'username' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'textBox',	//'type'
				'User Name',	//'label'
				'JoeBlow',	//'value'
				1,	//'owner_id'
				'Average',	//'owner_type
			],
			'email' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'email',	//'type'
				'Email',	//'label'
				'name@example.com',	//'value'
				1,	//'owner_id'
				'Average',	//'owner_type
			],
			'password' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'password',	//'type'
				'Password',	//'label'
				'123456',	//'value'
				1,	//'owner_id'
				'Average',	//'owner_type
			],
			'password_confirmation' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'password',	//'type'
				'Confirm Password',	//'label'
				'123456',	//'value'
				1,	//'owner_id'
				'Average',	//'owner_type
			],
			'facility_id' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'hidden',	//'type'
				'facility id',	//'label'
				'name@example.com',	//'value'
				1,	//'owner_id'
				'Average',	//'owner_type
			],
			'preference_id' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'hidden',	//'type'
				'preferences',	//'label'
				'123456',	//'value'
				1,	//'owner_id'
				'Average',	//'owner_type
			],
			'role_id' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'hidden',	//'type'
				'role id',	//'label'
				'123456',	//'value'
				1,	//'owner_id'
				'Average',	//'owner_type
			],
		];

		$this->save($list, $listTitle, $listId, $category);
	}

	public function save($list, $listTitle, $listId, $category)
	{
		$i = 0;
		foreach ($list as $key => $value)
		{
			//TODO extra1 is a horrible place to store this variable for organising lists
			$Objects = InterfaceObject::create([
				'menu_id'    => $listId,
				'menu_name'  => $listTitle,
				'menu_order' => $i,
				'name'       => $key,
				'family'     => $value[2],
				'type'       => $value[3],
				'label'      => $value[4],
				'value'      => $value[5],
				'owner_id'   => $value[6],
				'owner_type' => $value[7],
				'extra1'     => $category,
			]);
			$i++;
		}
	}
}