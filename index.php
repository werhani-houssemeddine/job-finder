<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./public/stylesheet/reset.css">
</head>
<body>
  <div id="root">
    <?php
      if(file_exists('./ressources/app.php')){
        require_once './ressources/app.php';
      } else {
        echo 'Warning Message !';
        exit(1);
      }
    ?>
  </div>
</body>
</html>