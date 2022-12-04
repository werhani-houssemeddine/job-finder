<?php

$currentURL = $_SERVER['REQUEST_URI'];
if(strpos($currentURL, 'main')){
  header('Location: /job-finder', true, 301);
}

if(!(isset($_SESSION['isAuthenticate'])) || !($_SESSION['isAuthenticate'])){
  echo 'Unauthorized';
  return;  
}

?>

<link rel="stylesheet" href="./main/style.css">
<main>

  <?php 
    require_once './main/nav.php';
  ?>

  <section>
    <?php
      if(isset($_GET['id'])){
        if($_GET['id'] == $_SESSION['userID']){
          require_once './user/index.php';
        }
      } else {
        require './main/jobs.php';
        echo '<pre>';
        print_r ($_SESSION);
        echo '</pre>';
      }
    ?>
  </section>
  <?php if(!(isset($_GET['id']))): ?>
    <article>
      
    </article>
  <?php endif; ?>
</main>

<script src="./main/script.js">

</script>