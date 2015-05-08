<?php namespace Bosspos\Listeners; 

use Bosspos\Employees\EmployeeWasRegistered;
use Bosspos\Employees\EmployeeWasRemoved;
use Bosspos\Eventing\EventListener;

class EmailNotifier extends EventListener {

	public function whenEmployeeWasRegistered(EmployeeWasRegistered $event)
	{
		flash()->
		info('Send Email confirmation about new: '. $event->employee->title.'', 'Bosspos\Listeners\EmailNotifier', 'floating')->
		timer(6000);
	}

	public function whenEmployeeWasRemoved(EmployeeWasRemoved $event)
	{
		flash()->
		info('Send Email  about removed: '. $event->employee->title.' Who was not actually removed yet cause it needs to soft delete', 'Bosspos\Listeners\EmailNotifier', 'floating')->
		timer(6000);

	}
}