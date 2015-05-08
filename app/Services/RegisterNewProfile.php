<?php

namespace Bosspos\Services;
/*
* RegistrerNewProfile.php for bosspos1.3
* By: natetheaverage
* created: 4/11/15
*/
use Bosspos\Profile;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class RegisterNewProfile implements RegistrarContract {

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

        return Validator::make($data, [
            'first_name' => 'required|max:55',
            'last_name' => 'required|max:55',
            'phone' => 'digits:10',
            'dob' => 'required|before:-21 years',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function create(array $data)
    {

        return Profile::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
			'phone' => $data['phone'],
			'address_street' => $data['address_street'],
			'address_city' => $data['address_city'],
			'address_state' => $data['address_state'],
			'address_zip' => $data['address_zip'],
			'dob' => $data['dob'],
			'user_id' => $data['user_id'],

        ]);
    }

}