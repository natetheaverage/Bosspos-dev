<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjectClasses extends Model {

	public function interfaceObject()
	{
		return $this->belongsToMany('App\InterfaceObject');
	}

}
