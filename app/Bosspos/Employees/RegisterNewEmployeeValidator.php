<?php namespace Bosspos\Employees; 



use Validator;

class RegisterNewEmployeeValidator {

protected static $rules = ['title'        => 'required',
						 'wage'         => 'required|max:8',
						 'badge_number' => 'required',
						 'badge_type'   => 'required',
						 'ss'           => 'required|max:11'
];

	public function validate(RegisterNewEmployeeCommand $command)
	{
		$validator = Validator::make([
			'title' => $command->title,
			'wage' => $command->wage,
			'badge_number' => $command->badge_number,
			'badge_type' => $command->badge_type,
			'ss' => $command->ss,
		], static::$rules);

		if($validator->fails())
		{
			die('Bosspos\Employees\RegisterNewEmployeeValidator failed to pass validation');
		}
	}
}