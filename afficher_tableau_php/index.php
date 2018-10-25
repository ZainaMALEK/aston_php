<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
    $tableau = [];
    $tableau = array();

    $tableau = ['Toto','Robert','Claire','Sarah','JayZ','Beyonce'];
    echo $tableau;
    print_r($tableau);

?>

<div class="container">
  <div class="row">
  <?php
    foreach($tableau as $element)
    {
      echo '<div class="col-4 text-center border my-2 p-4">';
        echo $element;
      echo '</div>';
    } 
    foreach($tableau as $element)
    {
      ?>
      <div class="col-4 text-center border my-2 p-4">
        <?php
        echo $element;
        ?>
      </div>
    <?php
    }
    ?>
  </div>
</div>