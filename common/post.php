<?php

function get_posts($json): ?Array {
    // Get the contents of the JSON file 
    $strJsonFileContents = file_get_contents(__DIR__ .$json);
    return json_decode($strJsonFileContents, true);
}

function set_posts($array,$path) {
    $json = json_encode($array);
    file_put_contents(__DIR__ . $path, $json);
}

function get_post(int $index): ?Array {
    $posts = get_posts("/data/posts.json");
    if(!empty($posts) && count($posts) > $index && $index > -1){
        return $posts[$index];
    }
    return null;
}

function set_post($title,$body) {
    $tab = get_posts("/data/posts.json");
    $post = [
    "title" => $title,
    "body" => $body
    ];
    array_push($tab, $post);
    set_posts($tab,"/data/posts.json");
}

function change_post($id,$title,$body){
    $tab = get_posts("/data/posts.json");
    $tab[$id] = [
        "title" => $title,
        "body" => $body
    ];
    set_posts($tab,"/data/posts.json");
}