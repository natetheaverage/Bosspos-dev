<?php namespace Boss\Pos\Employees;

class RemoveEmployeeCommand {

	public $employeeId;

	function __construct($employeeId)
	{
		$this->employeeId = $employeeId;
	}


}