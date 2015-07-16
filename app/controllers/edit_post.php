<?php # controllers/edit_product.php

#1. Logic

Auth::kickout();

$post = new Post();

$post->load(Route::param('id'));

if(Input::posted()){

	$post->fill(Input::all());

	$post->save();

	URL::redirect('admin');
}

Sticky::set('subject', $post->subject);
Sticky::set('content', $post->content);

$title = 'Edit Post: '.$post->subject;

#2. Load Views

include VIEWS.'header.php';
include VIEWS.'post_form.php';
include VIEWS.'footer.php';