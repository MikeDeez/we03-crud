<?php # posts.collection.php

class Posts_Collection extends Collection{
	public $table = 'posts';

	public function __construct($where = false, $order_by = false){
		parent::__construct($this->table, $where, $order_by);
	}
	
}
