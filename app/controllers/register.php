<?php # controllers/register.php

#1. Logic



if(Input::posted()){

	$check = new User();

	$check->load(['username' => Input::get('username', 'email')]);

	if(!$check->id){

		$user = new User();
	
		$user->fill(Input::all());

		$user->password = 
			password_hash($user->password, PASSWORD_DEFAULT);

		$user->save();

		Auth::log_in($user->id);

	} else {
		$error =  '  A user with that username/email already exists  ';
	}

	
	
}

#2. Load Views

include VIEWS.'header.php';
include VIEWS.'register_form.php';
include VIEWS.'footer.php';

