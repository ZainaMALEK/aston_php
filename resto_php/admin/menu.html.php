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
        <h1>Ajouter</h1>
        <form class="" action="menu.php" method="post">
          <div class="form-group">
            <label for="type">Catégorie</label>
            <select class="" name="categorie">
              <option value="Entree" >Entrée</option>
              <option value="Plat" >Plat</option>
              <option value="Dessert" >Dessert</option>
            </select>

          </div>
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" placeholder="Nom" name="nom">
          </div>
          <div class="form-group">
            <label for="nom">Prix</label>
            <input type="text" class="form-control" placeholder="Prix" name="prix">
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" placeholder="lien de l'image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>



        <table>
          <table>
            <thead>
              <tr>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th></th>
                <th></th>

              </tr>
            </thead>
            <tbody>


            <?php
            require('../connexion.php');
            $resultats = $pdo->prepare("SELECT * FROM menu ");
            $resultats->execute();

            while($menu = $resultats->fetch()){
                echo '<tr>';
                echo '<td><a href ="'.$menu['image'].'">'.$menu['nom'].'</a></td>';
                echo '<td>'.$menu['categorie'].'</td>';
                echo '<td>'.$menu['prix'].'</td>';
                echo '<td><a href src ="'.$menu['image'].'"</a></td>';
                echo '<td><a href="sup.php?id='.$menu['id'].'"><button class="btn btn-danger">Supprimer</button></a></td>';
                echo '<td><a href="update.html.php?id='.$menu['id'].'"><button class="btn btn-secondary">Modifier</button></a></td>';
                echo '</tr>';
            }

        ?>
            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
