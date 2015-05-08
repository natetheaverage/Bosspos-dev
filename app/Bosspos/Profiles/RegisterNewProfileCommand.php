<?php namespace Bosspos\Profiles;

class RegisterNewProfileCommand {

	public $firstName;

	public $lastName;

	public $badge_number;

	public $badge_type;

	public $ss;

	function __construct($title, $wage, $badge_number, $badge_type, $ss)
	{
		$this->title = $title;
		$this->wage = $wage;
		$this->badge_number = $badge_number;
		$this->badge_type = $badge_type;
		$this->ss = $ss;
	}

}