<?php namespace Boss\Repositories; 

use Boss\Lists;

class WizardTabOrderRepo {

	public function create($listName)
	{

		$tabs = Lists::where('title', $listName)->get()->toArray();

		$tabOrder = [];

		foreach($tabs as $tab)
		{
			$tabOrder = array_add($tabOrder, $tab['item'], [$tab['name'] => $tab['default']]);
		}

		return $tabOrder;
	}
}