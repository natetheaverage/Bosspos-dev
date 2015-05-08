<?php namespace App;

use App\Events\RecordsUserActivity;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model {

	use RecordsUserActivity;

	public function userInterface()
	{
		return $this->hasMany('App\UserInterface');
	}

	public function interfaceObject()
	{
		return $this->belongsToMany('App\InterfaceObject');
	}


}
