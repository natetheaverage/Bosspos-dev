<?php namespace Boss\Repositories;

use Boss\Pos\Projects\Project;
use Boss\Pos\Users\User;
use Boss\InterfaceObject;
use Boss\Contracts\RepoInterface;
use Illuminate\Support\Facades\Session;

/**
 * Class Repo composites model databases in to one collection using Eloquent
 *
 * @package Boss\Services
 */
class Repo implements RepoInterface{


    /**
     * Implements model based method
     *
     * @param $model ('currentUser', 'objectClasses')
     * @param $id
     * @return Mixed Collection
     */
    public function find($model, $id = null){

      return $this->$model($id);

    }

    /**
     * Collects Eloquent User model and its relationships in one object
	 * than saves it to a session object as user.
     *
     * @param $id
     * @return $this
     */
    public function currentUser($id)
    {
		//TODO Interface Object shouldent be here
		$currentUserWithRelations = $this->user(\Auth::user()->id);

		return $currentUserWithRelations;
    }
	public function user($id)
	{
		$userWithRelations = User::find($id)->load
		(
			'profile',
			'customerInfo',
			'employeeInfo',
			'membershipDetails',
			'userInterface',
			'interfaceObject'
		);

		return $userWithRelations;
	}


	/**
	 * Collects list of classes for use in field lists
	 * than saves it to a session object as user.
	 *
	 * @param $id
	 * @return $this
	 */
	public function objectClasses($id)
	{
		$savedClasses = InterfaceObject::find($id)->load
		(
			'objectClasses'
		);
		Session::flash('savedClasses', $savedClasses);
	}

	/**
	 * Collects Eloquent Project model and its relationships in one object
	 * than saves it to a session object as user.
	 *
	 * @param $id
	 * @return $this
	 */
	public function projects($id)
	{
		$projectsWithRelations = Project::all()->load
		(
			'task',
			'conversation.message'
		);

		return $projectsWithRelations;
	}



}