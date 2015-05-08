<?php namespace Bosspos\Employees;

use Validator;
use App\Services\ValidationRules;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class EmployeeRegistrar implements RegistrarContract {

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
		return Validator::make($data, $this->rules->get('employee'));
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function create(array $data)
    {
        return Employee::create($data);
    }

}