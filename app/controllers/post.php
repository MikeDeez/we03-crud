<?php # controllers/page.php

#1. Logic

$post = new Post();
$post->load(Route::param('id'));

$comments = new Comments_Collection();

$comments->where('deleted', '0');
$comments->where('post_id', Route::param('id'));
$comments->order_by('id', 'desc');
$comments->get();


#2. Load Views

include VIEWS.'header.php';
include VIEWS.'post.php';
include VIEWS.'comments.php';
include VIEWS.'comment_form.php';
include VIEWS.'footer.php';
