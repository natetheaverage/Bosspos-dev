<?php namespace Bosspos;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model {


	protected $fillable = [
		'name',
		'type',
		'license_number',
		'license_expiration',
		'phone',
		'fax',
		'site_url',
		'address_street',
		'address_city',
		'address_state',
		'address_zip',
		'picture',
		'company_id'
	];

	public function company()
	{
		return $this->belongsTo('Bosspos\Company');
	}

	public function employees()
	{
		return $this->hasMany('Bosspos\Employee', 'facility_id');
	}

	public function users()
	{
		return $this->hasMany('Bosspos\User', 'facility_id');
	}

	public function customers()
	{
		return $this->hasMany('Bosspos\Customers', 'facility_id');
	}




}
