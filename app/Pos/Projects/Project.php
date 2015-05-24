<?php namespace Boss\Pos\Projects;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title',
		'description',
		'class',
		'due_date',
		'due_time',
		'owner_id',
		'facility_id',
		'task_id',
		'delegated_id',
		'conversation_id',
		'creator_id',
	];


	public function task()
	{
		return $this->hasMany('Boss\Pos\Projects\Task');
	}

	public function user()
	{
		return $this->hasMany('Boss\Pos\Users\User');
	}

	public function facility()
	{
		return $this->hasOne('Boss\Pos\Facilities\Facility');
	}

	public function conversation()
	{
		return $this->hasMany('Boss\Pos\Conversations\Conversation', 'owner_id');
	}
}
