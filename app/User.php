<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'username',
		'email',
		'password',
		'facility_id',
		'preferences_id',
		'role_id',
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


	public function profile()
	{
		return $this->hasOne('Bosspos\Profiles\Profile');
	}

	public function customerInfo()
	{
		return $this->hasOne('App\Customer');
	}

	public function employeeInfo()
	{
		return $this->hasOne('Bosspos\Employees\Employee');
	}

	public function membershipDetails()
	{
		return $this->hasOne('App\Membership');
	}


	public function userInterface()
	{
		return $this->hasMany('App\UserActivity');
	}

	public function interfaceObject()
	{
		return $this->hasMany('App\InterfaceObject', 'owner_id');
	}

	public function registrationFields()
	{
		/* TODO: make columns generate my field list
		 * $columns = Schema::getColumnListing('users');
		 * $lists = Lists::where('item', $columns)->get();
		 */

		$fields = Lists::where('title', 'registrationFields')->get();
		if (env('TEST'))
		{
			$test = true;
			$fakeInfo = User::find(1)->toArray();
		}

		return compact('fields', 'fakeInfo', 'fieldOptions', 'test');
	}




}
