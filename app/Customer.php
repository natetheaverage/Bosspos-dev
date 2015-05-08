<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [

		'red_card_number',
		'red_card_provider',
		'red_card_expires',
		'identification_number',
		'identification_type',
		'identification_state',
		'identification_expires',
		'active',
		'facility_id',
		'user_id',
	];

	public function user()
	{
		$this->belongsTo('App\User');
	}

	public function facility()
	{
		$this->belongsToMany('App\Facility');
	}

	public function company()
	{
		$this->belongsTo('App\Company');
	}
}
