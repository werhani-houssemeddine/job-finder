<?php

require_once '../db/users.php';
session_start();

if(isset($_POST['email']) && isset($_POST['password'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];
  $user = getUser($email);
  
  if(!$user) { # User does not exist
    
    $_SESSION['error'] = 'Email or password are wrong !';
    $_SESSION['email'] = $_POST['email'];

    header('Location: /job-finder', true, 301);
    return;
  }

  if($user[0]['password'] !== $password) {
    $_SESSION['error'] = 'Email or password are wrong !';
    $_SESSION['email'] = $_POST['email'];

    header('Location: /job-finder', true, 301);
    return;
  }

  # session_destroy();
  
  $_SESSION['isAuthenticate'] = true;
  $_SESSION['userID'] = $user[0]['id'];
  unset($_SESSION['page']);

  header('Location: /job-finder', true, 301);
  
  echo "<h1>Hello " . $user[0]['full_name'] . " To Our Page</h1>";

} else {
  header('Location: /job-finder', true, 301);
}

?>