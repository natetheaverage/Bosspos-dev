<?php

namespace App\Services;
/*
* RegistrerNewProfile.php for bosspos1.3
* By: natetheaverage
* created: 4/11/15
*/
use App\Customer;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class RegisterNewCustomer implements RegistrarContract {

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {

        return Validator::make($data, [
            'red_card_number' => 'required|max:55',
            'red_card_expires' => 'required|max:20',
            'red_card_provider' => 'required|max:55',
            'identification_number' => 'required|max:11',
            'identification_type' => 'required|max:11',
            'identification_state' => 'required|max:11',
            'identification_expires' => 'required|max:11',
            'active' => 'required|max:11',
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
        return Customer::create([
            'red_card_number' => $data['red_card_number'],
            'red_card_expires' => $data['red_card_expires'],
			'red_card_provider' => $data['red_card_provider'],
			'identification_number' => $data['identification_number'],
			'identification_type' => $data['identification_type'],
			'identification_state' => $data['identification_state'],
			'identification_expires' => $data['identification_expires'],
			'active' => $data['active'],
			'facility_id' => $data['facility_id'],
			'created_by' => $data['created_by'],
			'user_id' => $data['user_id'],

        ]);
    }

}