<?php namespace Boss;

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
		return $this->belongsTo('Boss\Company');
	}

	public function employees()
	{
		return $this->hasMany('Boss\Employee', 'facility_id');
	}

	public function users()
	{
		return $this->hasMany('Boss\User', 'facility_id');
	}

	public function customers()
	{
		return $this->hasMany('Boss\Customers', 'facility_id');
	}




}
