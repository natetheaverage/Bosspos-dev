<?php namespace Boss\Listeners; 

use Boss\Employees\EmployeeWasRegistered;
use Boss\Employees\EmployeeWasRemoved;
use Boss\Eventing\EventListener;

class EmailNotifier extends EventListener {

	public function whenEmployeeWasRegistered(EmployeeWasRegistered $event)
	{
		flash()->
		info('Send Email confirmation about new: '. $event->employee->title.'', 'Boss\Listeners\EmailNotifier', 'floating')->
		timer(6000);
	}

	public function whenEmployeeWasRemoved(EmployeeWasRemoved $event)
	{
		flash()->
		info('Send Email  about removed: '. $event->employee->title.' Who was not actually removed yet cause it needs to soft delete', 'Boss\Listeners\EmailNotifier', 'floating')->
		timer(6000);

	}
}