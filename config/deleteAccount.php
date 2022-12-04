<?php

session_start();

if(isset($_SESSION['userID'])){
  
  require_once '../db/users.php';

  removeUser($_SESSION['userID']);
  session_destroy();

  header('Location: /job-finder', true, 301);
  return;
}

header('Location: /job-finder', true, 301);

?>