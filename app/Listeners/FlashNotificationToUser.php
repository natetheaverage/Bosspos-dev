<?php namespace Boss\Listeners; 

use Boss\Pos\Employees\Employee;
use Boss\Pos\Employees\EmployeeWasRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class FlashNotificationToUser {

	public function handle(Employee $event)
	{

		flash()->
		info('Do Something related to reporting in Boss\Listeners\ReportListeners with new: '. $event->employee->title )->
		timer(5000);
	}
}