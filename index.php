<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./public/stylesheet/reset.css">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">  

  <link rel="stylesheet" href="./public/stylesheet/style.css">
</head>
<body>
  <div id="root">
    <?php
      if(file_exists('./ressources/app.php')){

        # require_once './ressources/utiles.php';
        # require_once './ressources/app.php';
        
        require_once './db/users.php';

        echo '<pre>';
        print_r(getUser('houssem@email.com'));
        echo '</pre>';

        removeUser('ala@email.com');

      } else {
        echo 'Warning Message !';
        exit(1);
      }
    ?>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>