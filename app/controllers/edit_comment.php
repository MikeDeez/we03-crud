<?php # controllers/edit_comment.php

#1. Logic


$comment = new Comment();

$comment->load(Route::param('id'));

if(Auth::user_id()){

	$comment->fill(Input::all());

	$comment->save();
}

URL::redirect('/post/'.Route::param('id'));