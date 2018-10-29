<?php
    if(isset($_POST['nom']) && $_POST['nom'] !=''){
        require('connexion.php');
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $categorie = $_POST['categorie'];
        $id = $_POST['id'];
        $requete = $pdo->prepare("UPDATE menu SET nom = :nom ,categorie=:categorie, prix=:prix, image=:image WHERE id = :id");
        $requete->bindParam(':nom',$nom);
        $requete->bindParam(':categorie',$categorie);
        $requete->bindParam(':prix',$prix);
        $requete->bindParam(':image',$image);
        $requete->bindParam(':id',$id);
        $requete->execute();
        header('Location:index.php');
    }
    elseif(isset($_GET['id']) && $_GET['id'] !='')
    {
        require('connexion.php');
        $id = $_GET['id'];
        $requete = $pdo->prepare("SELECT * FROM menu WHERE id = :id");
        $requete->bindParam(':id',$id);
        $requete->execute();
        $menu = $requete->fetch();
    }
?>

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
        <div class="row">
            <div class="col-12">
                <form action="modif.php" method="post">
                    <label for="nom">Nom</label><br>
                    <input type="text" name="nom" value="<?php echo $menu['nom']; ?>"><br>
                    <label for="prix">Prix</label><br>
                    <input type="text" name="prix" value="<?php echo $menu['prix']; ?>"><br>
                    <label for="categorie">Categorie</label><br>
                    <input type="text" name="categorie" value="<?php echo $menu['categorie']; ?>"><br>
                    <label for="image">Image</label><br>
                    <input type="text" name="image" value="<?php echo $menu['image']; ?>"><br>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" >
                    <button class="btn btn-success">
                        Envoyer
                    </button>
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