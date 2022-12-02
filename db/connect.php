<?php

require '../credentials.php';

try{
  $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
} catch (PDOException $error) {
  echo 'failed Connect to DB';
  die();
}

?>