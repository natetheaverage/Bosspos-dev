<?php namespace Boss\Pos\Employees;

use Boss\Services\Registrar;
use Boss\Services\WizardSteps;
use Boss\Services\ValidationRules;
use Boss\Pos\Profiles\RegisterNewProfile;
use Boss\Pos\Customers\CustomerRegistrar;
use Illuminate\Validation\Factory as Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class EmployeeRegistrar implements RegistrarContract {

	public $validator;

	private $rules;

	private $wizardSteps;

	private $login;

	private $profile;

	private $customer;

	function __construct(
		Validator $validator,
		ValidationRules $rules,
		WizardSteps $wizardSteps,
		Registrar $login,
		RegisterNewProfile $profile
		)
	{
		$this->validator 	= $validator;
		$this->rules 		= $rules;
		$this->wizardSteps 	= $wizardSteps;
		$this->login 		= $login;
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
		$this->wizardSteps->set();

		$validator = $this->validator->make($data, $this->rules->get('employee'));
		if($validator->fails()){return $validator;}

		$this->wizardSteps->update();

		$validator = $this->profile->validator($data);
		if($validator->fails()){return $validator;}

		return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Employee
     */
    public function create(array $data)
    {
        return Employee::create($data);
    }

}