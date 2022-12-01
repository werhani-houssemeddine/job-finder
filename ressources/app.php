<?php

getFile('./public/views/login-form.php');
getFile('./db/connect.php');
getFile('./public/views/signup-form.php');

session_start();

var_dump($_SESSION);

if(isset($_SESSION['isAuthenticate'])){
  echo 'authentication done';
} else {
  
  /**
   * loginForm() is a fn that return the login component from /public/views/login-form.php
   * signUpForm() returns the signup component from /public/views/login-form.php
   */

  if(isset($_SESSION['page'])){
    echo $_SESSION['page'] === 'login' ? loginForm() : signUpForm();
  } else {
    $_SESSION['page'] = 'login';
    echo loginForm();
  }
}

?>