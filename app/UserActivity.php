<?php namespace Boss;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model {

	public function user()
	{
		return $this->belongsTo('Boss\User');
	}

	public function object()
	{
		return $this->morphTo();
	}

}
