<?php namespace Boss\Contracts;


interface UserControlsInterface {

	/**
	 * Generate various menus throughout the application
	 *
	 * @param $layout
	 * @return mixed
	 */
	public function makeComponent($layout);

}