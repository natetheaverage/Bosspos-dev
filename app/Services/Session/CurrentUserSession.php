<?php namespace Boss\Services\Session;

use Boss\Repositories\Repo;
use Illuminate\Support\Facades\Session;
use Boss\Contracts\UpdateCurrentUserSession;

/**
 * Class UpdatedUserSession
 * Loads and removes current user from Session info.
 *
 * @package Boss\Services
 */
class CurrentUserSession implements UpdateCurrentUserSession {

	/**
	 * Find current user object
	 *
	 * @return mixed
	 */
	public function getCurrentUser()
	{

		return Session::get('currentUser');

	}

	/**
	 * Save current User object to session
	 *
	 * @param $user_id
	 */
	public static function saveCurrentUser($user_id)
	{

		$repo = new Repo();
		Session::put('currentUser', $repo->find('currentUser', $user_id));

	}

	/**
	 * Truncate the current user session database
	 */
	public static function removeCurrentUser()
	{

		Session::forget('currentUser');

	}

}