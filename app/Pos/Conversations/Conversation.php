<?php namespace Boss\Pos\Conversations;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'conversations';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title',
		'description',
		'class',
		'owner_id',
		'owner_type',
		'facility_id',
		'tagged_id',
		'user_id',
	];


	public function message()
	{
		return $this->hasMany('Boss\Pos\Conversations\Message');
	}

	public function user()
	{
		return $this->hasMany('Boss\Pos\Users\User');
	}

	public function project()
	{
		return $this->belongsTo('Boss\Pos\Projects\Project');
	}
}
