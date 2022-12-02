<?php

# this file contains the PDO arguments
require './credentials.php';

try{
  $connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
} catch (PDOException $error) {
  echo 'failed Connect to DB';
  die();
}

/*
 * In this PHP file we will manage the users database 
 * at this momnet only Update function still not working
 * we can add a new User search for a user with the email and remove a user with the email to
*/

function getUser($value) {
  global $connection;
  if($connection) {
    $request = $connection->prepare('SELECT * FROM `users` WHERE email = :value ');
    
    $request->execute([
      'value' => $value
    ]);


    return $request->fetchObject();

  } else {
    echo 'Something Wrong with DB connection';
    die();
  }
}

function addUser($email, $name, $password) {
  global $connection;
  if($connection) {
    
    $request = $connection->prepare("
      INSERT INTO `users` (`email`, `full_name`, `password`) 
      VALUES (:email, :name, :password);
    ");

    $request->execute([
      'email'    => $email,
      'name'     => $name,
      'password' => $password
    ]);

  } else {
    echo 'Something Wrong with DB connection';
    die();
  }
}

function editUser() {
  global $connection;
  if($connection) {
    $request = $connection->prepare('

    ');
  } else {
    echo 'Something Wrong with DB connection';
    die();
  }
}

function removeUser($email) {
  global $connection;
  if($connection) {
    $request = $connection->prepare('
      DELETE FROM `users` WHERE email = ?
    ');

    $request->execute([$email]);

  } else {
    echo 'Something Wrong with DB connection';
    die();
  }
}

?>