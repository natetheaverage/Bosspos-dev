<?php namespace Boss\Services; 

use Illuminate\Support\Facades\Session;

class WizardSteps {

	protected $step = 1;
	protected $status = false;

	public function set()
	{
		if($this->check())
		{
			Session::put('wizard-stage', $this->step);
		}
	}

	public function update()
	{
		// TODO switch to redis cause it will increment
		$step = Session::get('wizard-stage');
		$step++;

		//dd($step);

		Session::put('wizard-stage', $step);
	}

	public function check()
	{
		if(Session::get('wizard-stage') == null){ $this->status = true; }
		return $this->status;
	}

	public function get()
	{
		return Session::get('wizard-stage');
	}

	public function pull()
	{
		return Session::pull('wizard-stage');
	}

	public function remove()
	{
		Session::pull('wizard-stage');
	}
}