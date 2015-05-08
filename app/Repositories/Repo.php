<?php

namespace Bosspos\Repositories;
/*
* Repo.php for bosspos
* By: natetheaverage
* created: 4/12/15
*/


use Bosspos\User;
use Bosspos\InterfaceObject;
use Bosspos\Interfaces\RepoInterface;
use Illuminate\Support\Facades\Session;

/**
 * Class Repo composites model databases in to one collection using Eloquent
 *
 * @package Bosspos\Services
 */
class Repo implements RepoInterface{


    /**
     * Implements model based method
     *
     * @param $model
     * @param $id
     * @return Mixed Collection
     */
    public function find($model, $id){

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
		//TODO Interface Object cant be here
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





}