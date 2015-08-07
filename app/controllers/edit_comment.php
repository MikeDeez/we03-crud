<?php # controllers/edit_comment.php

#1. Logic

Auth::kickout();

$comment = new Comment();

$comment->load(Route::param('id'));

if(Auth::user_id() == $comment->user_id){

	$comment->fill(Input::all());

	$comment->save();

	URL::redirect('/post/'.Route::param('id'));
}

$title = 'Edit Comment';

Sticky::set('content', $comment->content);



include VIEWS.'header.php';
include VIEWS.'edit_form.php';
include VIEWS.'footer.php';