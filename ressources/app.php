<?php

# getFile('./public/views/login-form.php');
# getFile('./db/connect.php');
getFile('./public/views/signup-form.php');

echo signUpForm();

session_start();
# var_dump($_SESSION);

if(isset($_SESSION['isAuthenticate'])){
  # echo 'authentication done';
} else {
  # a function that return the login form from the login-form.php file
  # echo loginForm();
}

?>