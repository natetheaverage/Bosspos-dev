<?php namespace Boss\Http\Middleware;

use Closure;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

	public function handle($request, Closure $next)
	{
		if ($this->isReading($request) || $this->shouldPassThrough($request) || $this->tokensMatch($request))
		{
			return $this->addCookieToResponse($request, $next($request));
		}
		return redirect('/');
		//TODO: turn this in to a http response and redirect to login
		throw new TokenMismatchException;

	}

}
