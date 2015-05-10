<?php namespace Boss\Pos\Profiles;

use Boss\Services\ValidationRules;
use Illuminate\Validation\Factory as Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class ProfileRegistrar implements RegistrarContract {

	public $validator;

	private $rules;

	private $profile;

	function __construct(
		Validator $validator,
		ValidationRules $rules,
		Profile $profile
	)
	{
		$this->validator 	= $validator;
		$this->rules 		= $rules;
		$this->profile 		= $profile;
	}


	/**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
		$validator = $this->validator->make($data, $this->rules->get('profile'));
		if($validator->fails()){return $validator;}

		return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Profile
     */
    public function create(array $data)
    {
        return Profile::create($data);
    }

}