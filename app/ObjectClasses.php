<?php namespace Boss;

use Illuminate\Database\Eloquent\Model;

class ObjectClasses extends Model {

	public function interfaceObject()
	{
		return $this->belongsToMany('Boss\InterfaceObject');
	}

}
