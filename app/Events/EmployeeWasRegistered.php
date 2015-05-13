<?php namespace Boss\Events;

use Boss\Commands\RegisterNewEmployeeCommand;
use Boss\Pos\Employees\Employee;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EmployeeWasRegistered extends Event implements ShouldBroadcast
{

	use SerializesModels;

	public $employee;

	public function __construct(Employee $employee)
	{
		$this->employee = $employee;
	}

	/**
	 * Get the channels the event should broadcast on.
	 *
	 * @return array
	 */
	public function broadcastOn()
	{
		// TODO: Implement broadcastOn() method.
	}
}