<?php
function send_json(Array $response): void {
  header('Content-Type: application/json');
  echo json_encode($response);
}