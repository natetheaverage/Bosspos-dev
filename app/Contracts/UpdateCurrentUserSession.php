<?php namespace Boss\Contracts;


/**
 * Class UpdatedUserSession
 * Loads and removes current user from Session info.
 *
 * @package Boss\Services
 */
interface UpdateCurrentUserSession {

	/**
	 * Find current user object
	 *
	 * @return mixed
	 */
	public function getCurrentUser();

	/**
	 * Save current User object to session
	 *
	 * @param $user_id
	 */
	public static function saveCurrentUser($user_id);

	/**
	 * Truncate the current user session database
	 *
	 */
	public static function removeCurrentUser();
}