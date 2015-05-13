<?php namespace Boss\Commands;

use Boss\Lists;

class RegisterNewEmployeeCommand extends Command {

	public $title;

	public $wage;

	public $badge_number;

	public $badge_type;

	public $ss;

	public $user_id;

	/**
	 * Set up Employee Command object
	 *
	 * @param $input
	 */
	function __construct($input, $newUser)
	{
		$this->title = $this->getNameOfChosenListSelection($input['title']);
		$this->wage = $input['wage'];
		$this->badge_number = $input['badge_number'];
		$this->badge_type = $input['badge_type'];
		$this->ss = $input['ss'];
		$this->user_id = $newUser->id;
	}

	/**
	 * Turn Employee command object in to an array
	 *
	 * @return array
	 */
	public function toArray()
	{
		return [
			'title'        => $this->title,
			'wage'         => $this->wage,
			'badge_number' => $this->badge_number,
			'badge_type'   => $this->badge_type,
			'ss'           => $this->ss,
			'user_id'      => $this->user_id
		];
	}

	/**
	 * Some items come from lists that "Chosen Selector" turns in to numeric values
	 * return the string that coincides with that number
	 *
	 * @param $title
	 * @return mixed
	 */
	private function getNameOfChosenListSelection($title)
	{
		$jobTitle = Lists::where('title', 'jobTitleMenu')->get();
		return $jobTitle->get($title)->name;
	}


}
