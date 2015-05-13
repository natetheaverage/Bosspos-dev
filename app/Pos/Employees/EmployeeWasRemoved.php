<?php namespace Boss\Pos\Employees;

class EmployeeWasRemoved  {

	public $employee;

	function __construct($employee)
	{
		$this->employee = $employee;
	}
}