<?php namespace Boss\Pos\Employees;

use Boss\Services\ValidationRules;
use Illuminate\Validation\Factory as Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class EmployeeRegistrar implements RegistrarContract {

	public $validator;

	private $rules;

	private $employee;

	function __construct(
		Validator $validator,
		ValidationRules $rules,
		Employee $employee
	)
	{
		$this->validator 	= $validator;
		$this->rules 		= $rules;
		$this->employee 	= $employee;
	}

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
		$validator = $this->validator->make($data, $this->rules->get('employee'));
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