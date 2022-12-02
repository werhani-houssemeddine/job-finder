<?php

# echo __DIR__;
require_once 'connect.php';

if ($conn) {
  echo "Connected to the database successfully! <br>";
} else {
  echo "Connected to database failed";
  die();
}


function insertUser($email, $name, $password) {
  global $conn;
  $sql = "
    INSERT INTO `users` 
    (`email`, `full_name`, `password`) VALUES ('$email', '$name', '$password')
  ";
  
  $request = $conn->prepare($sql);
  $result = $request->execute();

  echo $result;

}

function getUser($email) {
  global $conn;
  $users = $conn->prepare('SELECT * FROM `users` where email = :email ');
  
  $users->execute([
    'email' => $email
  ]);

  $res = $users->fetchAll();

  return $res;
}

?>