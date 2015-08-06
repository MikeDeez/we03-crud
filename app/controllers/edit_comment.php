<?php # controllers/edit_comment.php

#1. Logic

Auth::kickout();

$comment = new Comment();

$comment->load(Route::param('id'));

if(Auth::user_id() == $comment->user_id){

	$comment->fill(Input::all());

	$comment->save();
}

$title = 'Edit Comment:'

Sticky::set('content', $comment->content);

URL::redirect('/post/'.Route::param('id'));

include VIEWS.'header.php';
include VIEWS.'post_form.php';
include VIEWS.'footer.php';