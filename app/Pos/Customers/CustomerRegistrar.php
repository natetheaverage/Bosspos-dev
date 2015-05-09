<?php namespace Boss\Pos\Customers;


use Boss\Services\Registrar;
use Boss\Services\WizardSteps;
use Boss\Services\ValidationRules;
use Illuminate\Validation\Factory as Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class CustomerRegistrar implements RegistrarContract {

	public $validator;

	private $rules;

	private $wizardSteps;

	private $login;



	function __construct(
		Validator $validator,
		ValidationRules $rules,
		WizardSteps $wizardSteps,
		Registrar $login
	)
	{
		$this->validator 	= $validator;
		$this->rules 		= $rules;
		$this->wizardSteps 	= $wizardSteps;
		$this->login 		= $login;
	}
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
		$validator = $this->validator->make($data, $this->rules->get('customer'));
		if($validator->fails()){return $validator;}

		$this->wizardSteps->update();

		$validator = $this->login->validator($data);
		if($validator->fails()){return $validator;}

		return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Customer
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