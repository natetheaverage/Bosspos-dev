<?php namespace Boss\Listeners; 

use Boss\Employees\EmployeeWasRegistered;
use Boss\Eventing\EventListener;

class ReportListeners extends EventListener {

	public function whenEmployeeWasRegistered(EmployeeWasRegistered $event)
	{
		flash()->
		info('Do Something related to reporting in Boss\Listeners\ReportListeners with new: '. $event->employee->title )->
		timer(5000);
	}
}