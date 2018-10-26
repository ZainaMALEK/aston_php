<?php

require('../connexion.php');

$resultats = $pdo->prepare("SELECT * FROM menu WHERE id= :id");
$resultats->execute();
$results = $resultats->fetch;
$json = json_encode($results);
echo $json;




if ( isset($_POST['categorie'])&& ($_POST['categorie'] != '') && isset($_POST['nom'])&& ($_POST['nom'] != '') && isset($_POST['prix'])&& ($_POST['prix'] != ''))
{
    $categorie = $_POST['categorie'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $id = $_POST['id'];
    $image = $_POST['image'];


   $requete = $pdo->prepare('UPDATE menu SET nom=:nom, prix=:prix, categorie=:categorie ,image=:image WHERE id = :id');
   $requete->bindParam(':nom', $nom);
   $requete->bindParam(':categorie', $categorie);
   $requete->bindParam(':prix', $prix);
   $requete->bindParam(':id', $id);
   $requete->bindParam(':image', $image);
   $requete->execute();
   //header('Location: menu.html.php');
}
