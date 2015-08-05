<?php #  controllers/comments.php

# 1. Logic

$comments = new Comments_Collection();

$comments->where('deleted', '0');
$comments->order_by('id', 'asc');
$comments->get();
