<?php namespace Boss\Pos\Profiles;

use Boss\Services\WizardSteps;
use Boss\Services\ValidationRules;
use Boss\Pos\Customers\CustomerRegistrar;
use Illuminate\Validation\Factory as Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class RegisterNewProfile implements RegistrarContract {

	public $validator;

	private $rules;

	private $wizardSteps;

	function __construct(
		Validator $validator,
		ValidationRules $rules,
		WizardSteps $wizardSteps,
		CustomerRegistrar $customer
	)
	{
		$this->validator 	= $validator;
		$this->rules 		= $rules;
		$this->wizardSteps 	= $wizardSteps;
		$this->customer 	= $customer;
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

		$this->wizardSteps->update();

		$validator = $this->customer->validator($data);
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