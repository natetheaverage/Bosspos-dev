<?php namespace Boss\Http\Middleware;

use Closure;
use Boss\Repositories\Repo;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Session;
use Boss\Services\UpdatedUserSession as Update;

class CurrentUserSessionControl {

	public $repo;

	public $auth;

	function __construct(Repo $repo, Guard $auth, Session $session)
	{
		$this->repo = $repo;

		$this->auth = $auth;

		$this->session = $session;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

			if($request->user() == null)
			{
				Update::removeCurrentUser();
			}
			else
			{
				if( ! Session::get('currentUser'))
				{
					Update::loadCurrentUser($request->user()->id);
				}
			}

		return $next($request);
	}




}
