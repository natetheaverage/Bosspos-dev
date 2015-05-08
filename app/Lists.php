<?php namespace Bosspos;

use Bosspos\Events\RecordsUserActivity;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model {

	use RecordsUserActivity;

	public function userInterface()
	{
		return $this->hasMany('Bosspos\UserInterface');
	}

	public function interfaceObject()
	{
		return $this->belongsToMany('Bosspos\InterfaceObject');
	}


}
