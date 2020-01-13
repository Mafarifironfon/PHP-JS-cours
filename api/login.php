<?php
// Takes raw data from the request
$json = file_get_contents('php://input');
// Converts it into a PHP object
$data = json_decode($json);

if(!isset($data->username)){
    header('Content-Type: application/json');
    $response = [
        "success" => false,
        "error" => "Bad input"
    ];
    echo json_encode($response);
    return;
}

$username = $data->username;
$password = $data->password;

$allowedUsername = "JeanJean";
$allowedPassword = "password";

if($username === $allowedUsername && 
$password === $allowedPassword){
    header('Content-Type: application/json');
    $response = [
        "success" => true,
        "username" => $username
    ];
    echo json_encode($response);
}else{
    header('Content-Type: application/json');
    $response = [
        "success" => false,
    ];
    echo json_encode($response);
}