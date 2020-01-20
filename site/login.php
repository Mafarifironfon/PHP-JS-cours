<?php
session_start();

require_once '../common/auth.php';

if(!isset($_POST['username']) || !isset($_POST['password'])){
    redirect_to('index.php');
    return;
}

if(do_login($_POST['username'], $_POST['password'])){
    $_SESSION["username"] = $_POST['username'];
    $_SESSION['pseudo'] = $_POST['pseudo'];

    redirect_to('posts.php');
}else{
    redirect_to('index.php');
}

function redirect_to(string $url): void {
    header("Location: $url", true, 301);
    exit;
}