<?php # controllers/delete_post.php

#1. Logic 

Auth::kickout();

$post = new Post();

$post->load(Route::param('id'));

$post->delete();

#2. Redirect

URL::redirect('admin');