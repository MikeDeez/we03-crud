<?php # controllers/create_post.php

# 1. Logic

Auth::kickout_non_admin();

if(Input::posted()){

	$post = new Post();

	$post->fill(Input::all());

	$post->save();

	URL::redirect('admin');
}

$title = 'Create Post';

#2. Load Views

include VIEWS.'header.php';
include VIEWS.'post_form.php';
include VIEWS.'footer.php';