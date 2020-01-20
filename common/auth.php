<?php
function do_login(string $username, string $password): bool {
  $allowedUsername = "mafarifironfon";
  $allowedPassword = "password";

  if($username === $allowedUsername && 
     $password === $allowedPassword){
    return true;
  }

  return false;
}