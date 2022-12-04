<?php

session_start();
var_dump($_SESSION);

if(isset($_SESSION['userID'])){
  
  require_once '../db/users.php';
  removeUser($_SESSION['userID']);
  session_destroy();

}

header('Location: /job-finder', true, 301);

?>