<?php
//echo $_GET['id'];

if (isset($_GET['id'])) {
  require('../connexion.php');
  $id = $_GET['id'];
  $requete = $pdo->prepare('DELETE FROM  menu WHERE id = :id');
  $requete->bindParam(':id', $id);
  $requete->execute();
  header('Location: menu.html.php');
}
