<?php
  if(!empty($_GET['tid'] && !empty($_GET['product']))){
    $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

    $tid = $GET['tid'];
    $product = $GET['product'];
  } else {
    header('Location: index.php');
  }
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>thank you</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-4">
    <h2>thank you for purchasing <?php echo $product ?></h2>
    <hr>
    <p>your transition ID is <?php echo $tid; ?></p>
    <p><a href="index.php" class="btn btn-light mt-2">Go back</a></p>
  </div>
  </body>
</html>
