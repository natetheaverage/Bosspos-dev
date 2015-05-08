<?php namespace Bosspos\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 * Use repo.user to create a Session object with logged in user stats
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
		$this->middleware('repo.user');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        // Send user to welcome screen which hosts all entry partials
		return view('auth.login');
	}

}
