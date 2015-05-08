<?php
namespace Bosspos\Http\Composers;

use Bosspos\Http\Requests\Request;
use Bosspos\User;
use Bosspos\Repositories\Repo;
use Illuminate\Auth\Guard;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;

class UserDetailsComposer {

    public $auth;

    public $user;

    public $repo;


    public function __construct(Guard $auth, Repo $repo, User $user)
    {
        $this->auth = $auth;
        $this->user = $user;
        $this->repo = $repo;
    }

	/**
	 *  Set the variables to populate the current user info and controls
	 *
	 * @param View $view
	 */
	public function repoUserAndNav(View $view)
    {

		// TODO set menus to populate based on role rather than user
        $currentUser = Session::get('currentUser');
		if($currentUser){
		$dashboardMenu = $currentUser->interfaceObject->where('menu_name', 'DashboardMenu')->sortBy('menu_order');
		$mainNav = $currentUser->interfaceObject->where('menu_name', 'MainNavigation')->sortBy('menu_order');
		//$objectClasses = $dashboardMenu->objectClasses;
        //dd($view);

        $view->
        with('currentUser', $currentUser)->
		with('mainNav', $mainNav)->
        with('dashboardMenu', $dashboardMenu);
		}
    }


	/**
	 *
	 *
	 * @param View $view
	 */
	public function customer(View $view)
    {
		dd('not sure im using this??? it is in Http/Composers/UserDetailsComposer the method is called customer');
        $view->with('customer', $this->customer->find($this->auth->user()->id));
    }

}