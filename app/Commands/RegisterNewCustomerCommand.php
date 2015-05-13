<?php namespace Boss\Commands;

class RegisterNewCustomerCommand extends Command {

	public $red_card_number;

	public $red_card_provider;

	public $red_card_expires;

	public $identification_number;

	public $identification_type;

	public $identification_state;

	public $identification_expires;

	public $active;

	public $user_id;

	function __construct($input, $newUser)
	{
		$this->red_card_number = $input['red_card_number'];
		$this->red_card_provider = $input['red_card_provider'];
		$this->red_card_expires = $input['red_card_expires'];
		$this->identification_number = $input['identification_number'];
		$this->identification_type = $input['identification_type'];
		$this->identification_state = $input['identification_state'];
		$this->identification_expires = $input['identification_expires'];
		$this->active = $input['active'];
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
			'red_card_number'        => $this->red_card_number,
			'red_card_provider'      => $this->red_card_provider,
			'red_card_expires'       => $this->red_card_expires,
			'identification_number'  => $this->identification_number,
			'identification_type'    => $this->identification_type,
			'identification_state'   => $this->identification_state,
			'identification_expires' => $this->identification_expires,
			'active'                 => $this->active,
			'user_id'                => $this->user_id,
		];
	}

}