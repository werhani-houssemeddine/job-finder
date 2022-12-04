<?php
  require_once './db/users.php';
  $id = $_GET['id'];

  echo '<pre>';
  var_dump(getUserID($id));
  echo '</pre>';
?>

<link rel="stylesheet" href="./user/style.css">
<nav class="profile-container">
  <div class="profile-image-container">

  </div>
  <div class="profile-info">

  </div>
</nav>