<?php namespace Boss\Handlers\Commands;

use Boss\Services\Registrar;
use Boss\Commanding\CommandHandler;
use Boss\Eventing\EventDispatcher;
use Illuminate\Support\Facades\Session;

class RegisterNewUserCommandHandler implements CommandHandler{

	protected $user;

	private $dispatcher;

	function __construct(Registrar $user, EventDispatcher $dispatcher)
	{
		$this->user = $user;
		$this->dispatcher = $dispatcher;
	}

	/**
	 * Handel the command
	 * @param $command
	 * @return mixed
	 */
	public function handle($command)
	{
		$userArray = array_merge($command->toArray());
		$newUser = $this->user->create($userArray);
		$command->id = $newUser->id;
		event($command);
		return $command;
	}

	/**
	 * @param $command
	 * @return array
	 */
	protected function createArrayWithAddedFields($command)
	{

		//TODO make class that resolves background information.
		$registrarArray = array_merge($command->toArray(),
			['created_by'     => Session::get('currentUser')->id,
			 'facility_id'    => 1,
			 'preferences_id' => 1,
			 'role_id'        => 1,
			 'user_id'        => '']);

		return $registrarArray;
	}
}