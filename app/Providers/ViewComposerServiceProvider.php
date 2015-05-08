<?php namespace Bosspos\Providers;

use Bosspos\Profile;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\ServiceProvider;

/**
 * Class ViewComposerServiceProvider
 *
 * Pass variables constantly
 *
 * @package Bosspos\Providers
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

		view()->creator('*', "\Bosspos\Http\Composers\AppDetailsComposer@repo");
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

            view()->creator($view, "\Bosspos\Http\Composers\UserDetailsComposer@$compose");

    }

}
