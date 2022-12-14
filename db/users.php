<?php

const DB_HOST = 'localhost';
const DB_NAME = 'job-finder';
const DB_USER = 'root';
const DB_PASS = '';

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


    return $request->fetchAll();

  } else {
    echo 'Something Wrong with DB connection';
    die();
  }
}

function getUserID($id) {
  global $connection;
  $request = $connection->prepare('SELECT * FROM `users` WHERE id = ?');
  $request->execute([$id]);

  return $request->fetchAll();
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

    return getUser($email)[0]['id'];

  } else {
    echo 'Something Wrong with DB connection';
    die();
  }
}

function editInfoUser($id, $img, $cv, $phone, $link, $description) {
  global $connection;
  if($connection) {
    $request = $connection->prepare("
      UPDATE `users` SET 
      `phoneNumber` = :phone , 
      `link` = :link , 
      `description` = :description,
      `cv` = :cv,
      `image` = :image
      WHERE `users`.`id` = :id;
    ");

    $request->execute([
      'phone'       => $phone,
      'id'          => $id,
      'description' => $description,
      'link'        => $link,
      'cv'          => $cv,
      'image'       => $img
    ]);

    return [$img, $cv, $phone, $link, $description];
  } else {
    echo 'Something Wrong with DB connection';
    die();
  }
}

function removeUser($id) {
  global $connection;
  if($connection) {
    $request = $connection->prepare('
      DELETE FROM `users` WHERE id = ?
    ');

    $request->execute([$id]);

  } else {
    echo 'Something Wrong with DB connection';
    die();
  }
}

?>