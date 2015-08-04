<?php # post.model.php

class Post extends Model{
	public $table = 'posts';

	public function author(){
		return $this->belongsTo('User');
	}

	public function comments(){
		return $this->hasMany('Comment');
	}
}
