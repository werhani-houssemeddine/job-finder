<?php

session_start();
require_once '../db/users.php';

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['full_name'])){
  
  $name = $_POST['full_name'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  if(getUser($email)){

    $_SESSION['error'] = 'User already exist';
    $_SESSION['email'] = $_POST['email'];

    header('Location: /job-finder', true, 301);

    return ;
  } else {
    $id = addUser($email, $name, $password);
    $_SESSION['isAuthenticate'] = true;
    $_SESSION['isAuthorized'] = 'complete-sign-up';
    $_SESSION['userID'] = $id;

    header('Location: /job-finder/sign-up', true, 301);
    return ;
  }
  
} else {
  header('Location: /job-finder', true, 301);
}

?>