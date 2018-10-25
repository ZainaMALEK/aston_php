<?php
require('connexion.php');



  if((isset($_POST['nom'])) && ($_POST['nom'] != '') && (isset($_POST['prenom'])) && ($_POST['prenom'] != '') && (isset($_POST['age'])) && ($_POST['age'] != '') && (isset($_POST['id'])) && ($_POST['id'] != '')){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $id = $_POST['id'];
        require('connexion.php');
        $requete = $pdo->prepare("UPDATE eleve SET nom=:nom, prenom=:prenom, age=:age WHERE id = :id");
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':age', $age);
        $requete->bindParam(':id', $id);
        $requete->execute();
    }
    header('Location: list.php');
