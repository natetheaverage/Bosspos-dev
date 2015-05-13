<?php namespace Boss;

use Boss\Events\RecordsUserActivity;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model {

	use RecordsUserActivity;

	public function userInterface()
	{
		return $this->hasMany('Boss\UserInterface');
	}

	public function interfaceObject()
	{
		return $this->belongsToMany('Boss\InterfaceObject');
	}


}
