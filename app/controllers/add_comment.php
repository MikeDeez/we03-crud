<?php # controllers/add_comment.php

# 1. Logic

Auth::kickout();

if(Auth::is_logged_in()){

	$comment = new Comment();

	$comment->fill(Input::all());

	$comment->post_id = Route::param('id');

	$comment->user_id = Auth::user_id();

	$comment->save();
}

URL::redirect('/post/'.Route::param('id'));