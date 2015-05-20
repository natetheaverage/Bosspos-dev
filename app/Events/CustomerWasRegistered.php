<?php namespace Boss\Events;

use Boss\Commands\RegisterNewCustomerCommand;
use Boss\Pos\Customers\Customer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CustomerWasRegistered extends Event implements ShouldBroadcast
{

	use SerializesModels;

	public $customer;

	public function __construct(Customer $customer)
	{
		$this->customer = $customer;
	}

	/**
	 * Get the channels the event should broadcast on.
	 *
	 * @return array
	 */
	public function broadcastOn()
	{
		return ['test-channel'];
	}
}