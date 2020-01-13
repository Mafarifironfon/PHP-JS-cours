<?php
require_once './utils.php';
require_once "../common/post.php";
    
$posts = get_posts();
send_json($posts);