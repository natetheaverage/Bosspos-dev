<?php namespace Boss\Repositories;

use Boss\Pos\Projects\Project;
use Boss\Pos\Projects\Task;
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
		return $this->user(\Auth::user()->id);
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

	public function usersBasic()
	{
		return User::all()->load('profile')->get('id' ,['id','first_name','last_name','profile_pic']);
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
		$savedClasses = InterfaceObject::find($id)->load('objectClasses');
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
		return Project::all()->load('task','conversation.message');
	}

}