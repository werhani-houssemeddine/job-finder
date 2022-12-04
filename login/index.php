<link rel="stylesheet" href="./login/style.css">

<?php

  if(strpos($_SERVER['REQUEST_URI'], 'login')){
    header('Location: /job-finder', true, 301);
    return;
  }

  if(isset($_SESSION['error'])){
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
  } else {
    $error = NULL;
  }
  if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    unset($_SESSION['email']);
  } else {
    $email = NULL;
  }
?>

<div class="login-form">
  <div class="login-image">
    <img src="./public/images/page-logo.png" alt="" srcset="" height="800px">
  </div>
  <form action="./ressources/handleLogin.php" method="post" style="padding: 40px; height: 350px">
    
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label" >Email address</label>
      
      <?php
        if($email){
          echo "
          <input 
            type='email' 
            class='form-control error-input' 
            id='exampleInputEmail1' 
            aria-describedby='emailHelp' 
            placeholder='example@email.com'
            name='email'
            value='$email'
            required
          >
          ";
        } else {
          echo '
          <input 
            type="email" 
            class="form-control" 
            id="exampleInputEmail1" 
            aria-describedby="emailHelp" 
            placeholder="example@email.com"
            name="email"
            required
          >
          ';
        }
      ?>

      <?php
        if($error) echo "<div class='error-message'>$error</div>"
      ?>

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      
      <input 
        type="password" 
        class="form-control" 
        id="exampleInputPassword1" 
        placeholder="Password"
        name="password"
        required
      >

    </div>

    <div class="links">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Remember me</label>
      </div>

      <a href="#">Have any troubles ?</a>
    </div>

    <div class="btns">
      <span class="button-signup">
        <a href="./ressources/switch.php" > Sign Up </a>
      </span>
      <button type="submit" class="btn button-submit">Submit</button>
    </div>
    
  </form>
</div>