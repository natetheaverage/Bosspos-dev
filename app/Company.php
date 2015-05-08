<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

	protected $fillable = [
		'name',
		'type',
		'ein',
		'phone',
		'fax',
		'address_street',
		'address_city',
		'address_state',
		'owner_id'
	];

	public function facilities()
	{
		return $this->hasMany('App\Facility', 'company_id');
	}

	public function employees()
	{
		return $this->hasMany('App\Employee', 'company_id');
	}

}
