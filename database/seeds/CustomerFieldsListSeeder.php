<?php 

use Boss\InterfaceObject;
use Illuminate\Database\Seeder;

class CustomerFieldsListSeeder extends Seeder{

	public function run()
	{
		$listTitle = 'registrationFields';
		$listId = 3;
		$category = 'customer';

		$list = [
			'errorBox' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'alert',	//'family'
				'errorBox',	//'type'
				'Uh Oh',	//'label'
				'true',	//'value'
				'',			//'hook '
				1,			//'owner_id'
				'Average',	//'owner_type
			],
			'promotion_approval' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'checkBox',	//'type'
				'Promotion Approval',	//'label'
				'true',	//'value'
				'',			//'hook '
				1,			//'owner_id'
				'Average',	//'owner_type
			],
			'point_member_id' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'textBox',	//'type'
				'Point Member #',	//'label'
				'32112321',	//'value'
				'',			//'hook '
				1,			//'owner_id'
				'Average',	//'owner_type
			],
			'red_card_number' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'textBox',	//'type'
				'Red Card #',	//'label'
				'32112321',	//'value'
				'',			//'hook '
				1,			//'owner_id'
				'Average',	//'owner_type
			],
			'red_card_provider' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'textBox',	//'type'
				'Red Card Provider',	//'label'
				'32112321',	//'value'
				'',			//'hook '
				1,			//'owner_id'
				'Average',	//'owner_type
			],
			'red_card_expires' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'datePicker',	//'type'
				'Expiration Date',	//'label'
				'01/01/2018',	//'value'
				'red-card-picker',			//'hook '
				1,			//'owner_id'
				'Average',	//'owner_type
			],
			'identification_number' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'textBox',	//'type'
				'ID #',	//'label'
				'32112321',	//'value'
				'',			//'hook '
				1,			//'owner_id'
				'Average',	//'owner_type
			],
			'identification_state' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'dropDown',	//'type'
				'State Issued',	//'label'
				'statesMenu',	//'value'
				'',			//'hook '
				1,			//'owner_id'
				'Average',	//'owner_type
			],
			'identification_type' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'dropDown',	//'type'
				'ID Type',	//'label'
				'identificationTypeMenu',	//'value'
				'',			//'hook '
				1,			//'owner_id'
				'Average',	//'owner_type
				'29',	//'lists_id'
			],
			'identification_expires' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'datePicker',	//'type'
				'Expiration Date',	//'label'
				'01/01/2018',	//'value'
				'identification-picker',			//'hook '
				1,			//'owner_id'
				'Average',	//'owner_type
			],
			'active' => [ //name
				$listId ,	//'menu_id'
				$listTitle,	//'menu_name'
				'field',	//'family'
				'checkBox',	//'type'
				'Active',	//'label'
				'true',	//'value'
				'',			//'hook '
				1,			//'owner_id'
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