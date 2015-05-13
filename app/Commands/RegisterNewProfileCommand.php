<?php namespace Boss\Commands;

class RegisterNewProfileCommand extends Command {

	public $first_name;

	public $last_lame;

	public $address_street;

	public $address_city;

	public $address_state;

	public $address_zip;

	public $dob;

	public $user_id;

	function __construct($input, $newUser)
	{
		$this->first_name = $input['first_name'];
		$this->last_name = $input['last_name'];
		$this->phone = $input['phone'];
		$this->address_street = $input['address_street'];
		$this->address_city = $input['address_city'];
		$this->address_state = $input['address_state'];
		$this->address_zip = $input['address_zip'];
		$this->dob = $input['dob'];
		$this->user_id = $newUser->id;
	}

	/**
	 * Turn User command object in to an array
	 *
	 * @return array
	 */
	public function toArray()
	{
		return [
			'first_name'     => $this->first_name,
			'last_name'      => $this->last_name,
			'phone'          => $this->phone,
			'address_street' => $this->address_street,
			'address_state'  => $this->address_state,
			'address_city'   => $this->address_city,
			'address_zip'    => $this->address_zip,
			'dob'            => $this->dob,
			'user_id'        => $this->user_id,
		];
	}

}