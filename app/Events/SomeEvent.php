<?php namespace Boss\Events;

use Boss\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Boss\User;

class SomeEvent extends Event
{
    use SerializesModels;
	/**
	 * @var User
	 */
	private $user;

	/**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        //
		$this->user = $user;
	}

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
