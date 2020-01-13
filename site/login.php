<?php

if(!isset($_POST['username'])){
    return;
}

$username = $_POST['username'];
$password = $_POST['password'];

$allowedUsername = "JeanJean";
$allowedPassword = "password";

if($username === $allowedUsername && 
$password === $allowedPassword){
    header('Location: posts.php', true, 301);
}else{
    header('Location: index.php', true, 301);
    exit;
}