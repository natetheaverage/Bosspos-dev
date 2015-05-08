<?php namespace Bosspos\Employees; 

class EmployeeWasRemoved  {

	public $employee;

	function __construct($employee)
	{
		$this->employee = $employee;
	}
}