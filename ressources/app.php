<?php

# $loginForm = getFile('./public/views/login-form.php');
# $signUpForm = getFile('./public/views/signup-form.php');
# getFile('./db/connect.php');

session_start();
var_dump($_SERVER ["REQUEST_URI"]);

var_dump($_SESSION);

if(isset($_SESSION['isAuthenticate'])){
  echo 'authentication done';
} else {
  
  /**
   * loginForm() is a fn that return the login component from /public/views/login-form.php
   * signUpForm() returns the signup component from /public/views/login-form.php
   */

  if(isset($_SESSION['page'])){
    if($_SESSION['page'] === 'login'){
      getFile('./public/views/login-form.php');
    } else {
      getFile('./public/views/signup-form.php');
    }
  } else {
    $_SESSION['page'] = 'login';
    getFile('./public/views/login-form.php');
  }
}

?>