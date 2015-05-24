<?php namespace Boss\Pos\Conversations;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'subject',
		'body',
		'class',
		'conversation_id',
		'user_id'
	];

	public function user()
	{
		$this->belongsTo('Boss\Pos\Conversations\Conversation');
	}



}
