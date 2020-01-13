<?php
function do_login(string $username, string $password): bool {
  $allowedUsername = "JeanJean";
  $allowedPassword = "password";

  if($username === $allowedUsername && 
     $password === $allowedPassword){
    return true;
  }

  return false;
}