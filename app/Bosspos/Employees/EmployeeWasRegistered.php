<?php namespace Bosspos\Employees; 

class EmployeeWasRegistered {

	public $employee;

	function __construct(Employee $employee)
	{
		$this->employee = $employee;
	}

}