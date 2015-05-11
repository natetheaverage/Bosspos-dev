<?php namespace Boss\Services;

class ValidationRules {

	public $rules = [
		'user'     => ['username' => 'required|max:255',
					   'email'    => 'required|email|max:255|unique:users',
					   'password' => 'required|confirmed|min:6'
		],
		'employee' => ['title'        => 'required',
					   'wage'         => 'required|max:8',
					   'badge_number' => 'required',
					   'badge_type'   => 'required',
					   'ss'           => 'required|max:11'
		],
		'profile'  => ['first_name'  => 'required|max:55',
					   'last_name'   => 'required|max:55',
					   'phone'       => 'max:20',
					   'address_zip' => 'required|max:5',
					   'dob'         => 'required|before:-21 years'
		],
		'customer' => ['red_card_number'        => 'required|max:55',
					   'red_card_expires'       => 'required|max:20',
					   'red_card_provider'      => 'required|max:55',
					   'identification_number'  => 'required|max:11',
					   'identification_type'    => 'required|max:11',
					   'identification_state'   => 'required|max:11',
					   'identification_expires' => 'required|max:11',
					   'active'                 => 'required|max:11'
		]
	];


	public function get($model)
	{
		return $this->rules[ $model ];
	}

}