<?php

# $loginForm = getFile('./public/views/login-form.php');
# $signUpForm = getFile('./public/views/signup-form.php');
# getFile('./db/connect.php');

var_dump($_SESSION);

if(isset($_SESSION['isAuthenticate']) && $_SESSION['isAuthenticate']){
  require_once './db/users.php';
  
  $id = $_SESSION['userID'];
  $user = getUserID($id);

  echo '<pre>';
  print_r($user[0]);
  echo '</pre>';

} else {
  
  /*
  * loginForm() is a fn that return the login component from /public/views/login-form.php
  * signUpForm() returns the signup component from /public/views/login-form.php
  */

  if($_SESSION['page'] === 'login'){
    getFile('./public/views/login-form.php');
  } else {
    getFile('./public/views/signup-form.php');
  }
}

?>