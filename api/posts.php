<?php
require_once './utils.php';
require_once "../common/post.php";
    
$posts = get_posts("/data/posts.json");
send_json($posts);