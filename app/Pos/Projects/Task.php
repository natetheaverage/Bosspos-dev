<?php namespace Boss\Pos\Projects;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tasks';

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
		'project_id',
		'conversation_id',
		'creator_id',
	];


	public function project()
	{
		return $this->hasOne('Boss\Pos\Projects\Project');
	}

	public function user()
	{
		return $this->hasOne('Boss\Pos\Users\User');
	}

	public function facility()
	{
		return $this->hasOne('Boss\Pos\Facilities\Facility');
	}

	public function conversation()
	{
		return $this->hasOne('Boss\Pos\Conversations\Conversation');
	}


}
