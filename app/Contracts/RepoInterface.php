<?php namespace Boss\Contracts;

/**
 * RepoInterface collect models with relationships
 * Should return one object relationships nested.
 *
 * @package Boss\Interfaces
 */
interface RepoInterface {

	/**
	 * @param $model
	 * @param $id
	 * @return mixed
	 */
	public function find($model, $id);

}