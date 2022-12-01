<?php

getFile('./public/views/login-form.php');
getFile('./db/connect.php');

session_start();
var_dump($_SESSION);

if(isset($_SESSION['isAuthenticate'])){
  echo 'authentication done';
} else {
  # a function that return the login form from the login-form.php file
  echo loginForm();
}

?>