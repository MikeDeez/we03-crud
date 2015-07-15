<?php # controllers/admin.php


#1. Logic

$posts = new Posts_Collection();

$products->where('deleted', '0');
$products->order_by('id', 'asc');
$products->get();

#2. Load Views

include VIEWS.'header.php';
include VIEWS.'admin.php';
include VIEWS.'footer.php';