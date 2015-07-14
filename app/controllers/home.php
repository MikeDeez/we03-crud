<?php #  controllers/home.php

# 1. Logic

$posts = new Posts_Collection();

$posts->where('deleted', '0');
$posts->get();


# 2. Load views
include VIEWS.'header.php';
include VIEWS.'posts_list.php';
include VIEWS.'footer.php';