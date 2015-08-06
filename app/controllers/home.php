<?php #  controllers/home.php

# 1. Logic

$posts = new Posts_Collection();

$posts->where('deleted', '0');
$posts->order_by('date', 'desc');
$posts->get();

# set up an empty list of months
$months = [];
 
# for each post
foreach($posts->items as $post){
        # get the month that post was published, as a word. ie January
        $post_month = date('F', strtotime($post->date));
       
        # if this month hasn't been seen yet,
        if(!isset($months[$post_month])){
                # then add it to the list of months
                $months[$post_month] = [];
        }
       
        # and then add this post to the months list of posts
        $months[$post_month][] = $post;
}

# 2. Load views
include VIEWS.'header.php';
include VIEWS.'posts_list.php';
include VIEWS.'footer.php';