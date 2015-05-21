<?php namespace Boss\Interfaces;


interface FieldsRepoInterface {

	/**
	 * Create fields based on menu ID
	 *
	 * @param $menu_id
	 * @return mixed
	 */
	public function createFields($menu_id);

	/**
	 * Testing Info factory
	 *
	 * @param $menu_id
	 * @return mixed
	 */
	public function fillerInfo($menu_id);


}