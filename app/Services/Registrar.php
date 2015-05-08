<?php namespace Bosspos\Services;

use Bosspos\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	private $rules;

	function __construct(ValidationRules $rules)
	{
		$this->rules = $rules;
	}


	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		//dd($this->rules->get('user'));
		return Validator::make($data, $this->rules->get('user'));
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
