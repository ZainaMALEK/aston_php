<?php
if ( isset($_POST['categorie'])&& ($_POST['categorie'] != '') && isset($_POST['nom'])&& ($_POST['nom'] != '') && isset($_POST['prix'])&& ($_POST['prix'] != ''))
{
  $categorie = $_POST['categorie'];
  $nom = $_POST['nom'];
  $prix = $_POST['prix'];
  $id = $_POST['id'];
 echo $categorie;
 echo $nom;
 echo $prix;
 echo $id;
  require('../connexion.php');
   $requete = $pdo->prepare('UPDATE menu SET nom=:nom, prix=:prix, categorie=:categorie WHERE id = :id');
   $requete->bindParam(':nom', $nom);
   $requete->bindParam(':categorie', $categorie);
   $requete->bindParam(':prix', $prix);
   $requete->bindParam(':id', $id);
   $requete->execute();
   header('Location: menu.html.php');
}
