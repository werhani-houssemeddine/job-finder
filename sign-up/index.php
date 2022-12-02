<?php

session_start();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

require_once '../db/connect.php';

if(isset($_SESSION['authorized']) && $_SESSION['authorized'] === 'complete-signup') {

  if(isset($_SESSION['email']) && $_SESSION['email']) {
    require_once '../db/opertations.php';
    
    /**
     * getUser is a function that accept single arguments which is the email of the user
     * that we want to add it to our DB it return an associative array contains users with that 
     * email if the length of the result is 0 that's mean no user have that email 
     */
    if(count(getUser($_SESSION['email']))){

      $_SESSION['errors'] = [
        'error' => true,
        'message' => 'User already exist'
      ];
      $_SESSION['page'] = 'signup';

      echo '<p> User exist </p>';

      # header('Location: /job-finder/', true, 301);
      return ;
    } else {

      $email = $_SESSION['email'];
      $name = $_SESSION['full_name'];
      $password = $_SESSION['password'];

      insertUser($email, $name, $password);
      
      # header('Location: /job-finder', true, 301);
    }
  }

} else {

  echo '<p>Unauthorized</p>';

  $_SESSION['errors'] = [
    'error' => true,
    'message' => 'Unauthorized'
  ];

  # header('Location: /job-finder', true, 301);
}


?>