<?php # controllers/delete_comment.php

# 1. Logic

$comment = new Comment();

$comment->load(Route::param('id'));

if(Auth::user_id() == $comment->user_id){

	$comment->delete();
}

URL::redirect('/post/'.$comment->post_id);