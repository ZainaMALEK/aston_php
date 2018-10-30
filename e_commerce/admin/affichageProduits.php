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


	<table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Nom du produit</th>
            <th scope="col">Prix</th>
            <th scope="col">Description</th>
            <th></th>
            <th></th>  
          </tr>
        </thead>

        <tbody><?php
        	require('../dbConnect.php');
			$resultats = $pdo->prepare('SELECT * FROM product');
			$resultats->execute();
			while ($resultat = $resultats->fetch()) {

			echo '<tr>';
		    echo '<td>'.$resultat['productName'].'</a></td>';
		    echo '<td>'.$resultat['price'].'</td>';
		    echo '<td>'.$resultat['description'].'</td>';
		    
		    echo '<td><a href="sup.php?id='.$resultat['id'].'"><button class="btn btn-danger">Supprimer</button></a></td>';
		    echo '<td><a href="update.html.php?id='.$resultat['id'].'"><button class="btn btn-secondary">Modifier</button></a></td>';
		    echo '</tr>';
		}?>
		</tbody>
	</table>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
