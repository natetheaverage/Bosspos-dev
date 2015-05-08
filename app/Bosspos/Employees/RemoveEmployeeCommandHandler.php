<?php namespace Bosspos\Employees; 

use Bosspos\Commanding\CommandHandler;
use Bosspos\Eventing\EventDispatcher;

class RemoveEmployeeCommandHandler implements CommandHandler {

	protected $employee;
	/**
	 * @var
	 */
	private $dispatcher;

	function __construct(Employee $employee, EventDispatcher $dispatcher)
	{
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
		$employee = $this->employee->findOrFail($command->employeeId);

		$employee->remove();

		$this->dispatcher->dispatch($employee->releaseEvents());
	}
}