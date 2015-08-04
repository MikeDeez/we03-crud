<?php # comment.model.php

class Comment extends Model{
	public $table = 'comments';

	public function author(){
		return $this->belongsTo('User');
	}
}
