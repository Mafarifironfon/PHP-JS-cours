<?php
session_start();

require_once '../common/auth.php';
require_once '../common/post.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if(isset($_GET['changeRole']) && isset($_GET['id'])){
        change_role($_GET['id'],$_GET['changeRole']);
        redirect_to('interfaceadmin.php');
    }

    if (isset($_GET["idUser"])){
        deleteUserById($_GET["idUser"]);
        redirect_to('interfaceadmin.php');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['deconnexion'])){
        if(session_status() === PHP_SESSION_ACTIVE) session_destroy();
        redirect_to('index.php');
    }
    if(isset($_POST['del'])){
        deletePost( $_POST['id'] );
        redirect_to('interfaceadmin.php');
    }
    if(isset($_POST['deleteUser'])){
        deleteUser($_SESSION['username']);
        redirect_to('index.php');
    }

   if (isset($_POST["login"])){
    if(!isset($_POST['username']) || !isset($_POST['password'])){
        redirect_to('index.php');
        return;
    }
    
    if(do_login($_POST['username'], $_POST['password'])){
        if($_POST['username'] === "admin"){
            $_SESSION["is_admin"] = true;
            $_SESSION["username"] = $_POST['username'];
            $_SESSION['pseudo'] = $_POST['pseudo'];
        } else {
            $_SESSION["is_admin"] = false;
            $_SESSION["username"] = $_POST['username'];
            $_SESSION['pseudo'] = $_POST['pseudo'];  
        } 
        redirect_to('posts.php');   
        } else {
        redirect_to('index.php');
    }
   }
   if(isset($_POST["rec"])){
       // decode
       $users = get_posts("./data/user.json");
        // crypte
        $hashPaassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // push
       $user = [
        "username" => $_POST['username'],
        "password" =>  $hashPaassword,
        "role" => "member"
        ];
       array_push($users,$user);
       // encode 
        set_posts($users,"./../common/data/user.json");
        $_SESSION["is_admin"] = false;
        $_SESSION["username"] = $_POST['username'];
        $_SESSION['pseudo'] = $_POST['pseudo'];
       redirect_to('posts.php');   
   }
}


function redirect_to(string $url): void {
    header("Location: $url", true, 301);
    exit;
}