<?php

# $loginForm = getFile('./public/views/login-form.php');
# $signUpForm = getFile('./public/views/signup-form.php');
# getFile('./db/connect.php');

# var_dump($_SESSION);

if(isset($_SESSION['isAuthenticate']) && $_SESSION['isAuthenticate']){
  require_once './db/users.php';
  
  $id = $_SESSION['userID'];
  $user = getUserID($id);

  require_once './ressources/main.php';

} else {
  
  /*
  * loginForm() is a fn that return the login component from /public/views/login-form.php
  * signUpForm() returns the signup component from /public/views/login-form.php
  */

  if($_SESSION['page'] === 'login'){
    getFile('./login/index.php');
  } else {
    getFile('./public/views/signup-form.php');
  }
}

?>