<link rel="stylesheet" href="./public/stylesheet/reset.css">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">  
<link rel="stylesheet" href=".././public/stylesheet/signup-style.css">

<?php

session_start();

$_SESSION['full_name'] = 'Example';

/*
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
*/
?>

<section>
  <div class="complete-info">
    <div class="greeting">
      <?php
        echo "<p> Hello " . $_SESSION['full_name'] . ", you are welcome to join our website";
        echo ". I hope You found what you came for it </p>";
      ?>
      <div>
        <p>For better experience We hope to complete this questions </p>
      </div>
    </div>

    <form action="#" method="post">
      
    <div class="complete-info-part1">

        <div class="mb-3">
          <label for="formFile" class="form-label">Default file input example</label>
          <input class="form-control" type="file" id="formFile">
        </div>
        
        <div class="mb-3">
          <label for="formFile" class="form-label">Default file input example</label>
          <input class="form-control" type="file" id="formFile">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">+216</span>
          <input type="text" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="btns">
          <a href="#" class="prev-1">Prev</a>
          <a href="#" class="next-1">Next</a>
        </div>

      </div>

      <div class="complete-info-part2" hidden>
        <div class="fields">
          <div class="field"></div>
          <div class="field"></div>
          <div class="field"></div>
        </div>

        <div class="btns">
          <a href="#" class="next-1">Prev</a>
          <a href="#" class="prev-1">Next</a>
        </div>

      </div>

    </form>
  </div>
</section>