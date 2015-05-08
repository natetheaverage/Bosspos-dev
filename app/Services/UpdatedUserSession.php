<?php 

namespace App\Services;
    /*
    * UpdatedUserSession.php for bosspos1.5
    * By: natetheaverage
    * created: 4/28/15
    */

use App\Repositories\Repo;
use Illuminate\Support\Facades\Session;

/**
 * Class UpdatedUserSession
 * Loads and removes current user from Session info.
 *
 * @package App\Services
 */
class UpdatedUserSession {

	/**
	 * @param $user_id
	 */
	public static function loadCurrentUser($user_id)
	{
		$repo = new Repo();
		Session::put('currentUser', $repo->find('currentUser', $user_id));
	}

	/**
	 *
	 */
	public static function removeCurrentUser()
	{

		Session::forget('currentUser');

	}

}