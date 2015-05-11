<?php namespace Boss\Events;

use Boss\Commands\RegisterNewEmployeeCommand;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EmployeeWasRegistered extends Event
{

	use SerializesModels;

	public $employee;

	public function __construct(EmployeeWasRegistered $employee)
	{
		$this->employee = $employee;
	}

}