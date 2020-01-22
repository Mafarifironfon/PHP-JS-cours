<?php
require_once 'post.php';

function do_login(string $username, string $password): bool {

    // decode
    $users = get_posts("./data/user.json");
    // $allowedUsername = "mafarifironfon";
    // $allowedPassword = "password";

    foreach($users as $value){
        if($username === $value ["username"] && password_verify($password, $value ["password"] )){
        return true;   
        }
    }
    return false;
}


function deleteUser($username){
    $users = get_posts("./data/user.json");
    $cpt=0;
    $ID =0;
    foreach($users as $value){
        if($value ["username"] === $username){
            $ID = $cpt;
            break;
        }
        $cpt++;
    }
    $newArr = array_splice($users,$ID,1);
    set_posts($newArr,"./data/user.json");
}

function deletePost($index){
    $posts = get_posts("./data/posts.json");
    array_splice( $posts,$index,1);
    set_posts($posts,"./data/posts.json");
}