<?php # pages.collection.php

class Pages_Collection extends Collection{
	protected $table = 'pages';

	public function __construct($where = false, $order_by = false){
		parent::__construct($this->table, $where, $order_by);
	}
	
}
