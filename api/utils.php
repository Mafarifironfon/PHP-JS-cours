<?php
 // Renvoie la reponse au format JSON via une requete http 
function send_json(Array $response): void {
  header('Content-Type: application/json');
  header('access-control-allow-origin: *');
  echo json_encode($response);
}