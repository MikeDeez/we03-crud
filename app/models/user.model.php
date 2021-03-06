<?php # user.model.php

class User extends Model{
	
	public $table = 'users';

	public function authenticate(){
		$user = $this->db->select('*')
			->from($this->table)
			->where('username', $this->username)
			->where_or('email', $this->username)
			->get_one();
		
		if(!$user){
			return false;
		}

		if(password_verify($this->password, $user['password'])){
			$this->fill($user);
			return true;
		}else{
			return false;
		}

	}

}
