<?php

  $currentURL = $_SERVER['REQUEST_URI'];
  if(strpos($currentURL, 'handleJobs')){
    header('Location: /job-finder', true, 301);
  }

  session_start();
  var_dump($_POST);
  var_dump($_SESSION);
  try{
    $connection = new PDO("mysql:host=localhost;dbname=job-finder", 'root', '');
  } catch (PDOException $error) {
    echo 'failed Connect to DB';
    echo '<br>' . $error->getmessage();
    die();
  }

  $request = $connection->prepare("
    INSERT INTO `jobs` (`id`, `title`, `description`, `time`, `location`)
    VALUES (:id, :title, :description, :time, :location);
  ");

  $request->execute([
    'id'          => $_SESSION['userID'],
    'title'       => $_POST['jobTitle'],
    'description' => $_POST['description'],
    'time'        => $_POST['jobTime'],
    'location'    => $_POST['location']
  ]);

  $_SESSION['job-add'] = true;

  header('Location: /job-finder', true, 301);
?>