<?php namespace Boss\Providers;

use Boss\Profile;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\ServiceProvider;

/**
 * Class ViewComposerServiceProvider
 *
 * Pass variables constantly
 *
 * @package Boss\Providers
 */
class ViewComposerServiceProvider extends ServiceProvider {

    /**
	 * Bootstrap the application services.
     *
	 * @return void
	 */
	public function boot(Guard $auth)
	{
		$this->composeUserDetails('*', 'repoUserAndNav');

		view()->creator('*', "\Boss\Http\Composers\AppDetailsComposer@repo");
    }

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

    /**
     * Call the user composer class for descriptions about the user
     *
     * @param $view
     * @param $compose
     */
    public function composeUserDetails($view, $compose)
    {

            view()->creator($view, "\Boss\Http\Composers\UserDetailsComposer@$compose");

    }

}
