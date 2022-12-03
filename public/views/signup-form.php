<?php
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

<div class='signup-form'>
  <form action="./ressources/handleSignUp.php" method="post">

    <div class="mb-3">
      <label for="exampleInputName" class="form-label" >Full Name</label>
      <input type="text" 
          class="form-control" 
          id="exampleInputName" 
          aria-describedby="name" 
          placeholder="put your name"
          name="full_name"
          required
      >
    </div>
      
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
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
      <label for="password" class="form-label">Password</label>
      <input
        type="password"
        class="form-control"
        id="password"
        name="password"
        placeholder="Password"
      >
    </div>

    <div class="mb-3">
      <label for="date" class="date" id="date">Date of birth</label>
      <input type="date" class="date" id="date" name="birthday">
    </div>

    <div class="btns">
      <span class="button-signup">
        <a href="./ressources/switch.php" > Already have an account </a>
      </span>
      <button type="submit" class="btn button-submit">Submit</button>
    </div>
      
  </form>
</div>
<script src="./public/scripts/formValidation.js"></script>