<?php namespace Bosspos\Profiles;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name',
		'last_name',
		'profile_picture',
		'phone',
		'address_street',
		'address_city',
		'address_state',
		'address_zip',
		'dob',
		'user_id',

	];

	public function user()
	{
		$this->belongsTo('App\User');
	}


}
