<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'promotion_approval',
		'point_member_id',
		'points',
		'user_id',
	];

	public function user()
	{
		$this->belongsTo('App\User');
	}

	public function facilities()
	{
		$this->belongsToMany('App\Facility');
	}

}
