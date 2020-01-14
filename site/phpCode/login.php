<?php
require_once './../../common/auth.php';

// SI UNE DES VARIABLES UTILISATEUR OU PASSWORD EST VIDE ON REDIRIGE VERS index.html
if(!isset($_POST['username']) || !isset($_POST['password'])){
    redirect_to('index.php');
    return;
}

// SI LES VARIABLES UTILISATEUR OU PASSWORD CONTIENNENT DES VALEURS 
// ENVOIE UNE REQUETE VERS LA FCT do_login
// CONTROLE LA VALIDITE DU NOM ET MOT DE PASSE ET REVOIE UN BOOLEEN
// REDIRIGE LE CLIENT EN FCT DE LA REPONSE

if(do_login($_POST['username'], $_POST['password'])){
    redirect_to('./../templates/posts.php');
}else{
    redirect_to('./../templates/index.php');
}

// FONCTION DE REDIRECTION 
function redirect_to(string $url): void {
    header("Location: $url", true, 301);
    exit;
}