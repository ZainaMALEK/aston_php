<?php 
$idProduct = $_GET['id'];
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Fiche produit</title>
  </head>
  <body>
<?php 
require('../dbConnect.php');
$resultats = $pdo->prepare('SELECT * FROM product WHERE id= :id');
$resultats->bindparam(':id', $idProduct);
$resultats->execute();
$product= $resultats->fetch();
?>

    <div class="container">

      <div class="card" style="width: 36rem;">
        <img class="card-img-top" src=".../100px180/" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?=$product['productName'];?></h5>
          <p class="card-text"><?=$product['description'];?></p>
          <p class="card-text">Prix unitaire :<?=$product['price'];?> euros</p>
          <!-- <a href="panier.php?id=<?=$idProduct;?>" class="btn btn-primary">Ajouter au panier</a>
          <a href="index.php" class="btn btn-primary">Retour aux produits</a> -->
          <form action="panier.php" method="post">
            <input type="hidden" name="idProduct" value="<?=$idProduct;?>">
            <input type="hidden" name="priceProduct" value="<?=$product['price'];?>">
            <input type="number" name="qteProduct" value="1">
            <input type="submit" class="btn btn-primary" name="" value="Ajouter au panier">
            <a href="index.php" class="btn btn-primary">Retour aux produits</a>
          </form>
        </div>
      </div>
    </div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>