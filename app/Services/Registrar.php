<?php namespace Boss\Services;

use Boss\Pos\Users\User;
use Illuminate\Validation\Factory as Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	private $rules;

	private $validator;

	function __construct(Validator $validator, ValidationRules $rules)
	{
		$this->rules = $rules;
		$this->validator = $validator;
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
		return User::create($data);
	}

}
