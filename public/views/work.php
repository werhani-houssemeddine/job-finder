<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
    <h1> So you're new  welcome this is a form you must complete </h1>
    <form>
    <div class="form">
        <div class="mb-3">
        <label for="exampleInputName" class="form-label" >Full Name</label>
        <input type="text" 
            class="form-control" 
            id="exampleInputName" 
            aria-describedby="name" 
            placeholder="put your name"
            name="name "
            required>

        </div>
        
       
         <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Email address</label>
             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
         <div>
        <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
         <div class="mb-3 form-check">
           <input type="checkbox" class="form-check-input" id="exampleCheck1">
           <label class="form-check-label" for="exampleCheck1">Check me out</label>
         </div>
     <button type="submit" class="btn btn-primary">Submit</button>
     <div class="mb-3">
     <label for="date" class="date" id="date">Date of birth</label>
     <input type="date" class="date" id="date">

     </div>
     <div class="mb-3">
     <label for="identity" class="entrence" id="entrence">Type</label>
        <select id="" name="cars">
            <option value="searcher">searcher</option>
            <option value="poster">poster</option>
            <option value="booth">booth</option>
        </select>
     </div>
     

     <div class="btns">
          <button class="btn button-signup">Sign Up</button>
          <button type="submit" class="btn button-submit">Submit</button>
        </div>
        
     
    </form>
    </div>
</body>
</html>