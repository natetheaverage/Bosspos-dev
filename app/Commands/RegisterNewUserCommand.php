<?php namespace Boss\Commands;

class RegisterNewUserCommand extends Command {

	public $username;

	public $email;

	public $password;

	public $id;

	function __construct($input)
	{
		$this->username = $input['username'];
		$this->email = $input['email'];
		$this->password = $input['password'];
	}

	/**
	 * Turn User command object in to an array
	 *
	 * @return array
	 */
	public function toArray()
	{
		return [
			'username' => $this->username,
			'email'    => $this->email,
			'password' => $this->password,
		];
	}

}