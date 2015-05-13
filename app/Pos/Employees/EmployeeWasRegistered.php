<?php namespace Boss\Pos\Employees;

class EmployeeWasRegistered {

	public $employee;

	function __construct(Employee $employee)
	{
		$this->employee = $employee;
	}

}