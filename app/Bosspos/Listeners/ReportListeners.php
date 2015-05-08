<?php namespace Bosspos\Listeners; 

use Bosspos\Employees\EmployeeWasRegistered;
use Bosspos\Eventing\EventListener;

class ReportListeners extends EventListener {

	public function whenEmployeeWasRegistered(EmployeeWasRegistered $event)
	{
		flash()->
		info('Do Something related to reporting in Bosspos\Listeners\ReportListeners with new: '. $event->employee->title )->
		timer(5000);
	}
}