<?php namespace Boss\Pos\Profiles;

use Boss\Commanding\CommandHandler;

class RegisterNewProfileCommandHandler implements CommandHandler {

	protected $profile;

	function __construct(Profile $profile)
	{
		$this->profile = $profile;
	}

	/**
	 * Handel the command
	 * @param $command
	 * @return mixed
	 */
	public function handle($command)
	{
		//$this->profile->register(

		//);
		var_dump($command);
	}
}