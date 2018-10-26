<?php



if ( isset($_POST['categorie'])&& ($_POST['categorie'] != '') && isset($_POST['nom'])&& ($_POST['nom'] != '') && isset($_POST['image'])&& ($_POST['image'] != '') )
{
  if(isset($_POST['prix']) && ($_POST['prix'] != ''))
  {
    $categorie = $_POST['categorie'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $image = $_POST['image'];
    echo $categorie;

    require('../connexion.php');
     $requete = $pdo->prepare('INSERT INTO menu(nom,categorie, prix, image) VALUES(:nom, :categorie, :prix, :image)');
     $requete->bindParam(':nom', $nom);
     $requete->bindParam(':categorie', $categorie);
     $requete->bindParam(':prix', $prix);
     $requete->bindParam(':image', $image);
     $requete->execute();
     echo "true";

     //header('Location: menu.html.php');
   }
}else{
  echo "probleme";
}
