<?php namespace Boss\Events;

use Boss\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserWasRegistered extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

}
