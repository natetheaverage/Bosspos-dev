<?php

use Boss\InterfaceObject;
use Illuminate\Database\Seeder;

class EmployeeFieldsListSeeder extends Seeder {


	public function run()
	{
		$listTitle = 'registrationFields';
		$listId = 1;
		$category = 'employee';

		$list = [
			'errorBox'     => [ //name
				$listId,    //'menu_id'
				$listTitle,    //'menu_name'
				'alert',    //'family'
				'errorBox',    //'type'
				'Uh Oh',    //'label'
				'567',        //'value'
				1,    //'owner_id'
				'Average',    //'owner_type
			],
			'title'        => [ //name
				$listId,    //'menu_id'
				$listTitle,    //'menu_name'
				'field',    //'family'
				'dropDown',    //'type'
				'Job Title',    //'label'
				'jobTitleMenu',    //'value'
				1,    //'owner_id'
				'Average',    //'owner_type
				'29',            //'lists_id'
			],
			'wage'         => [ //name
				$listId,    //'menu_id'
				$listTitle,    //'menu_name'
				'field',    //'family'
				'textBox',    //'type'
				'Wage',    //'label'
				'12.50',    //'value'
				1,    //'owner_id'
				'Average',    //'owner_type
			],
			'roles'        => [ //name
				$listId,    //'menu_id'
				$listTitle,    //'menu_name'
				'field',    //'family'
				'multiSelect',    //'type'
				'Roles',    //'label'
				'userTypeMenu',    //'value'
				1,    //'owner_id'
				'Average',    //'owner_type
				'30',    //'lists_id'
			],
			'badge_number' => [ //name
				$listId,    //'menu_id'
				$listTitle,    //'menu_name'
				'field',    //'family'
				'textBox',    //'type'
				'Badge #',    //'label'
				'000-000-000-000',    //'value'
				1,    //'owner_id'
				'Average',    //'owner_type
			],
			'badge_type'   => [ //name
				$listId,    //'menu_id'
				$listTitle,    //'menu_name'
				'field',    //'family'
				'dropDown',    //'type'
				'Badge Type',    //'label'
				'badgeTypeMenu',    //'value'
				1,    //'owner_id'
				'Average',    //'owner_type
			],
			'ss'           => [ //name
				$listId,    //'menu_id'
				$listTitle,    //'menu_name'
				'field',    //'family'
				'textBox',    //'type'
				'Social Security #',    //'label'
				'32112321',    //'value'
				1,    //'owner_id'
				'Average',    //'owner_type
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
			$i ++;
		}
	}
}