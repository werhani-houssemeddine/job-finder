<?php
  
  session_start();

  if(isset($_SESSION['page'])){
    $_SESSION['page'] = $_SESSION['page'] === 'login' ? 'signup' : 'login';
  } else {
    $_SESSION['page'] = 'login';
  }

  header('Location: /job-finder', true, 301);

?>