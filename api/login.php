<?php
require_once '../common/auth.php';

// Takes raw data from the request
$json = file_get_contents('php://input');
// Converts it into a PHP object
$data = json_decode($json);

if(!isset($data->username) || !isset($data->password)){
    send_json([
        "success" => false,
        "error" => "Bad input"
    ]);
    exit;
}

if(do_login($data->username, $data->password)){
    send_json([
        "success" => true,
        "username" => $data->username
    ]);
}else{
    send_json([
        "success" => false,
    ]);
}

function send_json(Array $response): void {
    header('Content-Type: application/json');
    echo json_encode($response);
}