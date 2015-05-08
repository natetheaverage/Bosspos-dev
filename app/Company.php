<?php namespace Bosspos;

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
		return $this->hasMany('Bosspos\Facility', 'company_id');
	}

	public function employees()
	{
		return $this->hasMany('Bosspos\Employee', 'company_id');
	}

}
