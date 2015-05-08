<?php namespace Bosspos\Services; 

use Illuminate\Support\Facades\Session;

class WizardSteps {

	public function update($step)
	{
		Session::put('wizard-stage', $step);
	}

	public function remove()
	{
		Session::forget('wizard-stage');
	}
}