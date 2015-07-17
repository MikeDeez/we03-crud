<?php # controllers/admin.php


#1. Logic

Auth::kickout_non_admin();

$posts = new Posts_Collection();

$posts->where('deleted', '0');
$posts->order_by('id', 'asc');
$posts->get();

#2. Load Views

include VIEWS.'header.php';
include VIEWS.'admin.php';
include VIEWS.'footer.php';