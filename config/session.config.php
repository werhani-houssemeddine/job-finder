<?php
  session_start();
  if(!isset($_SESSION['page'])){
    $_SESSION['page'] = 'login';
  }
?>