<?php namespace Boss\Handlers\Commands;

use Boss\Pos\Customers\CustomerRegistrar;
use Boss\Commanding\CommandHandler;
use Boss\Eventing\EventDispatcher;
use Illuminate\Support\Facades\Session;

class RegisterNewCustomerCommandHandler implements CommandHandler{

	protected $customer;

	private $dispatcher;

	function __construct(CustomerRegistrar $customer, EventDispatcher $dispatcher)
	{
		$this->customer = $customer;
		$this->dispatcher = $dispatcher;
	}

	/**
	 * Handel the command
	 * @param $command
	 * @return mixed
	 */
	public function handle($command)
	{

		$customerArray = $this->createArrayWithAddedFields($command);
		$newCustomer = $this->customer->create($customerArray);
		event($command);
		//$this->dispatcher->dispatch(['']);

	}

	/**
	 * @param $command
	 * @return array
	 */
	protected function createArrayWithAddedFields($command)
	{

		//TODO make class that resolves background information.
		$registrarArray = array_merge($command->toArray(),
			['created_by'     => Session::get('currentUser')->id,
			 'facility_id'    => 1,
			 'preferences_id' => 1,
			 'role_id'        => 1,
			 ]);

		return $registrarArray;
	}
}