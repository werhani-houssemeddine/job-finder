<?php

getFile('./credentials.php');

try{
  $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
  if ($conn) {
		echo "Connected to the database successfully! <br>";
	}
} catch (PDOException $error) {
  echo 'failed Connect to DB';
  die();
}

?>