<?php
require('../connexion.php');


if (isset($_POST['id']) && $_POST['id'] != '') {



  $id = $_POST['id'];

  $requete = $pdo->prepare('DELETE FROM  menu WHERE id = :id');
  $requete->bindParam(':id', $id);
  $requete->execute();
  //header('Location: menu.html.php');
  //require('affichage.php');

}else{
  echo "Problème lors de la suppression...";
}
