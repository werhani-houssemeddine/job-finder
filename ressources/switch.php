<?php
  
  session_start();

  $_SESSION['page'] = $_SESSION['page'] === 'login' ? 'signup' : 'login';

  header('Location: /job-finder', true, 301);

?>