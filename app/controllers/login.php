<?php # controllers/login.php

#1. Logic

if(Input::posted()){

	$user = new User();

	$user->fill(Input::all());
	
	$success = $user->authenticate();

	if($success){
		Auth::log_in($user->id);
		URL::redirect(url('admin'));
	}
}


#2. Load views

include VIEWS.'header.php';
include VIEWS.'login_form.php';
include VIEWS.'footer.php';