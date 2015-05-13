<?php namespace Boss\Pos\Customers;

use Boss\Services\ValidationRules;
use Illuminate\Validation\Factory as Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class CustomerRegistrar implements RegistrarContract {

	public $validator;

	public $rules;
	/**
	 * @var Customer
	 */
	private $customer;

	function __construct(
		Validator $validator,
		ValidationRules $rules,
		Customer $customer
	)
	{
		$this->validator 	= $validator;
		$this->rules 		= $rules;
		$this->customer = $customer;
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
        return Customer::create($data);
    }

}