<?php
namespace Boss\Http\Composers;

use Boss\Events\Event;
use Boss\User;
use Boss\Repositories\Repo;
use Illuminate\Auth\Guard;
use Illuminate\Contracts\View\View;

class AppDetailsComposer {

    public $repo;

    public function __construct(Repo $repo)
    {
        $this->repo = $repo;
    }

    public function repo(View $view)
    {

		/*
		 *  TODO make system wide vars
		 *
		 *
		 */

		$app = ['title' => 'BossPOS'];

        //$app = $this->repo->find('system', $this->facility->id());;
		//$objectClasses = $dashboardMenu->objectClasses;

        $view->
        with('app', $app);
    }

}