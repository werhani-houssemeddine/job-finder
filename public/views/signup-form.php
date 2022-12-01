<?php

function signUpForm(){
  return <<<HTML
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
          <input 
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            placeholder="example@email.com"
            name="email"
            required
          >
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
            name="password"
            placeholder="Password"
          >
        </div>

        <div class="mb-3">
          <label for="date" class="date" id="date">Date of birth</label>
          <input type="date" class="date" id="date" name="birthday">
        </div>

        <div class="mb-3">
          <label for="identity" class="entrence" id="entrence">Type</label>
          <select id="" name="typeOfAccount">
            <option value="searcher">searcher</option>
            <option value="poster">poster</option>
            <option value="booth">booth</option>
          </select>
        </div>

        <div class="btns">
          <span class="button-signup">
            <a href="./ressources/switch.php" > Already have an account </a>
          </span>
          <button type="submit" class="btn button-submit">Submit</button>
        </div>
          
      </form>
    </div>
  HTML;
}

?>