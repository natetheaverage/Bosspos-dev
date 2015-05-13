<?php namespace Boss\Handlers\Commands;

use Boss\Events\Event;
use Boss\Services\WizardSteps;
use Boss\Pos\Employees\EmployeeRegistrar;
use Boss\Commanding\CommandHandler;
use Boss\Pos\Employees\Employee;
use Boss\Eventing\EventDispatcher;
use Illuminate\Support\Facades\Session;

class RegisterNewEmployeeCommandHandler implements CommandHandler{

	private $wizardSteps;

	protected $employee;

	private $dispatcher;

	function __construct(WizardSteps $wizardSteps, EmployeeRegistrar $employee, EventDispatcher $dispatcher)
	{
		$this->wizardSteps = $wizardSteps;
		$this->employee = $employee;
		$this->dispatcher = $dispatcher;
	}

	/**
	 * Handel the command
	 * @param $command
	 * @return mixed
	 */
	public function handle($command)
	{
		$employeeArray = $this->createArrayWithAddedFields($command);
		//dd($employeeArray);
		$newEmployee = $this->employee->create($employeeArray);
		//$this->wizardSteps->update(4);
		//$this->dispatcher->dispatch($employee);

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
			 'user_id'        => '']);

		return $registrarArray;
	}
}