<?php
require_once '../common/auth.php';
require_once './utils.php';

// recupère la requete 
$json = file_get_contents('php://input');
// DECODE LE FORMAT JSON --> CONVERTI EN UN TABLEAU PHP
$data = json_decode($json);

//
if(!isset($data->username) || !isset($data->password)){
    // REPONDS A LA REQUETE FORMAT JSON
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

