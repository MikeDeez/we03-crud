<?php # controllers/edit_product.php

#1. Logic

Auth::kickout();

$post = new Post();

$post->load(Route::param('id'));

if(Input::posted()){

	$product->fill(Input::all());

	$product->save();

	URL::redirect('admin');
}

Sticky::set('subject', $product->subject);
Sticky::set('content', $product->content);

$title = 'Edit Post: '.$product->subject;

#2. Load Views

include VIEWS.'header.php';
include VIEWS.'post_form.php';
include VIEWS.'footer.php';