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
      <form action="update.php" method="POST">
        <?php
        require('../connexion.php');

        if(isset($_GET['id']) && $_GET['id'] !='')
        {
          $id = $_GET['id'];
          $requete = $pdo->prepare('SELECT * FROM  menu WHERE id = :id');
          $requete->bindParam(':id', $id);
          $requete->execute();

          $menu = $requete->fetch();

          $nom = $menu['nom'];
          $categorie = $menu['categorie'];
          $prix = $menu['prix'];

        }
    //  echo '<form action="update.php" method="post">';
        echo '<label for="nom">Nom</label><br>';
        echo '<input id="nom" type="text" name="nom" value ="'.$nom.'"><br>';
        echo '<label for="type">Catégorie</label><br>';
        echo '<select id="categorie"  name="categorie"><br>';
        echo '<option value="Entree" >Entrée</option><br>';
        echo '<option value="Plat" >Plat</option><br>';
        echo '<option value="Dessert" >Dessert</option><br>';
        echo '</select><br>';
        echo '<label for="nom">Prix</label><br>';
        echo '<input id="prix" type="text" name="prix" value ="'.$prix.'"><br>';
        echo '<input type="hidden" name ="id" value ="'.$id.'">';?>
        <button class="updateBtn btn btn-primary">Modifier</button>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
