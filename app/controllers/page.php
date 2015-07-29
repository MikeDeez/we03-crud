<?php # controllers/page.php

#1. Logic

$post = new Page();
$post->load(Route::param('subject'));
$post->get();

#2. Load Views

include VIEWS.'header.php';
include VIEWS.'page.php';
include VIEWS.'footer.php';