<?php
  session_start();

  $currentURL = $_SERVER['REQUEST_URI'];
  if(strpos($currentURL, 'editJob')){
    header('Location: /job-finder/?myJobs', true, 301);
  }

  try{
    $connection = new PDO("mysql:host=localhost;dbname=job-finder", 'root', '');
  } catch (PDOException $error) {
    echo 'failed Connect to DB';
    echo '<br>' . $error->getmessage();
    die();
  }

  $request = $connection->prepare("
  UPDATE `jobs` SET `title` = ? , `description` = ?, `location` = ?, `time` = ? WHERE `jobs`.`jobID` = ?;
  ");

  $request->execute([
    $_POST['title'], $_POST['description'], $_POST['location'], $_POST['time'], $_POST['jobId']
  ]);


?>