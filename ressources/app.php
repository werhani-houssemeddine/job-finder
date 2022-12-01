<?php

getFile('./public/views/login-form.php');

session_start();
var_dump($_SESSION);

if(isset($_SESSION['isAuthenticate'])){
  echo 'authentication done';
} else {
  echo loginForm(); # a function that return the login form from the login-form.php file
}


?>