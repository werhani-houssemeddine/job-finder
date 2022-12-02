<?php

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

session_start();

$_SESSION = $_POST;

require_once '../db/opertations.php'; 
/**
 * getUser is a function that accept single arguments which is the email of the user
 * that we want to add it to our DB it return an associative array contains users with that 
 * email if the length of the result is 0 that's mean no user have that email 
 */

var_dump(getUser($_REQUEST['email']));
return;

if(count(getUser($_SESSION['email']))){

  $_SESSION['errors'] = [
    'error' => true,
    'message' => 'User already exist'
  ];
  $_SESSION['page'] = 'signup';
  echo '<p> User exist </p>';
} else {
  $_SESSION['authorized'] = 'complete-signup';
  header('Location: /job-finder/sign-up', true, 301);
}
?>