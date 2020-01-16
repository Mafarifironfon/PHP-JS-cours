<?php
require_once './utils.php';
require_once "../common/post.php";
// RECUPERE LE FICHIER JSON ET L'ENVOI    
$posts = get_posts();
send_json($posts);