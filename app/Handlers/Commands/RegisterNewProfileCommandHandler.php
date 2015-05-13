<?php namespace Boss\Handlers\Commands;

use Boss\Pos\Profiles\ProfileRegistrar;
use Boss\Commanding\CommandHandler;
use Boss\Eventing\EventDispatcher;
use Illuminate\Support\Facades\Session;

class RegisterNewProfileCommandHandler implements CommandHandler{


	protected $profile;

	private $dispatcher;

	function __construct( ProfileRegistrar $profile, EventDispatcher $dispatcher)
	{
		$this->profile = $profile;
		$this->dispatcher = $dispatcher;
	}

	/**
	 * Handel the command
	 * @param $command
	 * @return mixed
	 */
	public function handle($command)
	{

		$profileArray = $this->createArrayWithAddedFields($command);
		$newProfile = $this->profile->create($profileArray);
		event($command);
		//$this->dispatcher->dispatch(['']);

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
			 ]);

		return $registrarArray;
	}
}