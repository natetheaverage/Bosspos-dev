<?php namespace Boss\Http\Middleware;

use Closure;
use Boss\Services\Session\CurrentUserSession;

class CurrentUserSessionControl {

	private $session;

	function __construct(CurrentUserSession $session)
	{
		$this->session = $session;
	}

	/**
	 * Maintain a session variable with all the current user objects.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

		if ($request->user() == null)
		{
			$this->session->removeCurrentUser();
		} else
		{
			if ( ! $this->session->getCurrentUser())
			{
				$this->session->saveCurrentUser($request->user()->id);
			}
		}

		return $next($request);
	}


}
