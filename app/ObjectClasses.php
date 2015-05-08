<?php namespace Bosspos;

use Illuminate\Database\Eloquent\Model;

class ObjectClasses extends Model {

	public function interfaceObject()
	{
		return $this->belongsToMany('Bosspos\InterfaceObject');
	}

}
