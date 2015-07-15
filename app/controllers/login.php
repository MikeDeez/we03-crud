<?php # controllers/login.php

#1. Logic

if(Input::posted()){

	$user = new User();

	$user->fill(Input::all());
	
	$success = $user->authenticate();

	if($success){
		Auth::log_in($user->id) == 1;
		URL::redirect(url('admin'));
	}else{
		URL::redirect(url(''));
	}
}


#2. Load views

include VIEWS.'header.php';
include VIEWS.'login_form.php';
include VIEWS.'footer.php';