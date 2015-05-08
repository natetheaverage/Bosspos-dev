<?php

namespace Bosspos;

use Bosspos\Events\RecordsUserActivity;
use Illuminate\Database\Eloquent\Model;

class InterfaceObject extends Model {

	use RecordsUserActivity;

	public function user()
	{
		return $this->belongsToMany('Bosspos\User');
	}

	public function  lists()
	{
		return $this->hasMany('Bosspos\Lists', 'owner_id');
	}

	public function  objectClasses()
	{
		return $this->hasMany('Bosspos\ObjectClasses', 'object_id');
	}

	/**
	 * Uses optionList methods hasMany to locate sub list
	 * than iterate through each object to push values
	 * in to an array
	 *
	 * @return array
	 */
	public function optionList($listName)
	{

		$collection = Lists::where('title', $listName)->get();

		$menu = [];

		foreach($collection as $item)
		{
			array_push($menu, $item->name);
		};

		return $menu;
	}

}
