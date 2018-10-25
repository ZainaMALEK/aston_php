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
                echo '<td><button id="deleteBtn" class="btn btn-danger">Supprimer</button></a></td>';
                echo '<td><a href="update.html.php?id='.$menu['id'].'"><button class="btn btn-secondary">Modifier</button></a></td>';
                echo '</tr>';
            }

        ?>


            </tbody>
        </table>
    </div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Ajouter au menu
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter au menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


          <div class="form-group">
            <label for="type">Catégorie</label>
            <select id="categorie" class="" name="categorie">
              <option value="Entree" >Entrée</option>
              <option value="Plat" >Plat</option>
              <option value="Dessert" >Dessert</option>
            </select>

          </div>
          <div class="form-group">
            <label for="nom">Nom</label>
            <input id="nom" type="text" class="form-control" placeholder="Nom" name="nom">
          </div>
          <div class="form-group">
            <label for="nom">Prix</label>
            <input id="prix"type="text" class="form-control" placeholder="Prix" name="prix">
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input id="image" type="text" class="form-control" placeholder="lien de l'image" name="image">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="btn" type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </div>
  </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-3.3.1.min.js">

    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="app.js">

    </script>
  </body>
</html>
