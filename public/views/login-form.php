<?php

function loginForm(){
  return <<<HTML
    <div class="login-form">
      <form action="./ressources/handleLogin.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" >Email address</label>
          
          <input 
            type="email" 
            class="form-control" 
            id="exampleInputEmail1" 
            aria-describedby="emailHelp" 
            placeholder="example@email.com"
            name="email"
            required
          >

          <div id="error"></div>
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

        <div class="btns">
          <button class="btn button-signup">Sign Up</button>
          <button type="submit" class="btn button-submit">Submit</button>
        </div>
        
      </form>
    </div>
  HTML;
}
?>