<?php # controllers/delete_comment.php

# 1. Logic

if(Auth::is_logged_in()){

	$comment = new Comment();

	$comment->post_id = Route::param('id');

	$comment->load(Route::param('post_id'));

	$comment->delete();
}

URL::redirect('/post/'.Route::param('id'));