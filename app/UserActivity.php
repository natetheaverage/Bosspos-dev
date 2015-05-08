<?php namespace Bosspos;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model {

	public function user()
	{
		return $this->belongsTo('Bosspos\User');
	}

	public function object()
	{
		return $this->morphTo();
	}

}
