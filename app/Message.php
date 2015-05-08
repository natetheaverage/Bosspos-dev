<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'subject',
		'body',
		'location_id',
		'created_by',
		'user_id'

	];

	public function user()
	{
		$this->belongsToMany('App\User');
	}



}
