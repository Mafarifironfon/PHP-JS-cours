<?php
function do_login(string $username, string $password): bool {
  $allowedUsername = "jj";
  $allowedPassword = "xx";

  if($username === $allowedUsername && 
     $password === $allowedPassword){
    return true;
  }

  return false;
}