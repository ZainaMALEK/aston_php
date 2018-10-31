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

  <div class="container">
    <section class="row">
      <section class="col-10">
        <table class="table ">
          <thead>
            <tr>
              <th scope="col">Nom du produit</th>
              <th scope="col">Prix</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
          <?php

          require('../dbConnect.php');
          $resultats = $pdo->prepare('SELECT * FROM product');
          $resultats->execute();
          while ($resultat = $resultats->fetch()) {

          echo '<tr>';
          echo '<td>'.$resultat['productName'].'</a></td>';
          echo '<td>'.$resultat['price'].'</td>';
          echo '<td><a href="produit.php?id='.$resultat['id'].'"><button class="btn ">Voir produit</button></a></td>';
          echo '</tr>';
          }?>
          </tbody>
        </table>
      </section>

      <section class="col-2">
        <!-- Button trigger modal -->
        
        
          <img type="button" style="height: 30px" src="../img/panier.png" data-toggle="modal" data-target="#exampleModal">
        
      </section>

    </section>
  </div>

  


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <table id="panier" class="table">
          <thead>
            <tr>
              <th>Nom de l'article</th>
              <th>Prix unitaire</th>
              <th>Quantité</th>
              <th>Prix total</th>
              <th></th>

            </tr>
          </thead>
          <tbody>
            
            <?php
            $totalPrice =0;
            if(session_id() ==''){
              session_start();
              
              if(isset($_SESSION['panier'])){
                $panier=$_SESSION['panier'];
        
                foreach($panier as $product){
                  $idProduct= $product['idProduct'];
                  $quantityProduct = $product['qteProduct'];
                  

                  require('../dbConnect.php');
                  $resultats = $pdo->prepare('SELECT * FROM product WHERE id= :idProduct');
                  $resultats->bindparam(':idProduct', $idProduct);
                  $resultats->execute();
                  $product= $resultats->fetch();
                  $quantityPrice= $product['price']*$quantityProduct; 
                  $totalPrice += $quantityPrice;
                  echo'<tr>';
                  echo '<td>'.$product['productName'].'</td>';   
                  echo '<td>'.$product['price'].'</td>';
                  echo '<td>'.$quantityProduct.'</td>';
                  echo '<td>'.$quantityPrice.'</td>';
                  echo "</tr>";
                }
              }
            }
            ?>

            
          </tbody>
        </table
        <p>Valeur totale du panier  <?='  '.$totalPrice?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
