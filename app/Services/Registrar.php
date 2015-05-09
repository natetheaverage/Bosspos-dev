<?php namespace Boss\Services;

use Boss\Pos\Users\User;
use Illuminate\Validation\Factory as Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	private $rules;

	private $validator;

	private $wizardSteps;

	function __construct(Validator $validator, ValidationRules $rules, WizardSteps $wizardSteps)
	{
		$this->rules = $rules;
		$this->validator = $validator;
		$this->wizardSteps = $wizardSteps;
	}


	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		$validator = $this->validator->make($data, $this->rules->get('user'));
		if ($validator->fails()){return $validator;}

		$this->wizardSteps->update();

		return $validator;
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'username' => $data['username'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'facility_id' => $data['facility_id'],
			'preferences_id' => $data['preferences_id'],
			'role_id' => $data['role_id'],
		]);
	}

}
