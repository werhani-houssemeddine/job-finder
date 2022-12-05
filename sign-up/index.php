<?php

  session_start();
  if(!(isset($_SESSION['isAuthorized'])) || $_SESSION['isAuthorized'] != 'complete-sign-up'){
    $_SESSION['error'] = true;
    $_SESSION['message'] = 'Access denied';

    header('Location: /job-finder', true, 301);
    return ;
  }

  $id = $_SESSION['userID'];
  #echo "id: $id <br>";

  require_once '../db/users.php';
  $userName = getUserID($id)[0]['full_name'];
  # echo $userName;
?>

<?php

  if(
    isset($_POST['phone']) &&
    isset($_POST['description']) &&
    isset($_POST['cv']) &&
    isset($_POST['image']) &&
    isset($_POST['link'])
  ){
    echo "phone :" . $_POST['phone'] . "<br>";
    echo "description :" . $_POST['description'] . "<br>";
    echo "cv :" . $_POST['cv'] . "<br>";
    echo "image :" . $_POST['image'] . "<br>";
    echo "link :" . $_POST['link'] . "<br>";

    editInfoUser($id , NULL, NULL, $_POST['phone'], $_POST['link'], $_POST['description']);
    # var_dump(editInfoUser($id, '', '', 55555555, '', ''));
    
    unset($_SESSION['isAuthorized']);
    header('Location: /job-finder', true, 301);

  }
  # function editInfoUser($id, $img, $cv, $phone, $link, $description) {
  # editInfoUser($_POST['image'], $_POST['cv'], $_POST['phone'], $_POST['link'], $_POST['description']);
?>


<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">  
<link rel="stylesheet" href=".././public/stylesheet/signup-style.css">
<link rel="stylesheet" href="./style.css">

<section>
  <div class="complete-info">
    <div class="greeting">
      <?php
        echo "<p> Hello $userName, you are welcome to join our website";
        echo ". I hope You found what you came for it </p>";
      ?>
      <div>
        <p>For better experience We hope to complete this questions </p>
      </div>
    </div>

    <form action="" method="post">     
      <div class="complete-info-part1">

        <div class="row" style="margin-bottom: 20px">
          <div class="col">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile" name="image">
          </div>
          <div class="col">
              <label for="formFile" class="form-label">Default file input example</label>
              <input class="form-control" type="file" id="formFile" name="cv" accept="image/png, image/jpeg">
          </div>
        </div>

        <div class="row" style="margin-bottom: 20px">
          <div class="input-group col">
            <span class="input-group-text" id="basic-addon1">
              <img src="../public/images/tn-logo.png" alt="" width="32" height="32">
            </span>
            <input type="text" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1" name="phone">
          </div>

          <div class="input-group col">
            <span class="input-group-text" id="basic-addon1">
            <img src="../public/images/linkdin-logo.png" width="32" height="32" >
            </span>
            <input type="text" class="form-control" placeholder="Linkedin link" aria-label="Username" aria-describedby="basic-addon1" name="link">
          </div>
        </div>

        <div class="mb-3">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Any description ..." name="description"></textarea>
        </div>

        <div class="btns">
          <button type="submit" class="btn button-submit">Submit</button>
        </div>   

      </div>
    </form>
  </div>
</section>
<script src="./script.js"></script>