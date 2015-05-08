<?php 

namespace App\Services;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Session;
class CurrentUserSessionControl {

	public function loadCurrentUser(Guard $auth)
	{
		$user = Session::get('currentUser');
		if($auth->user()->username != $user->username)
		{
			$this->repo->find('currentUser', $this->auth->id());
		}
	}

	public function removeCurrentUser()
	{}

	public function updateCurrentUser()
	{}
}