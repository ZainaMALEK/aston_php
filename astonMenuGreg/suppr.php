<?php
    if(isset($_POST['id']) && $_POST['id'] != ''){
        require('connexion.php');
        $id = $_POST['id'];
        $requete = $pdo->prepare('DELETE FROM menu WHERE id = :id');
        $requete->bindParam(':id', $id);
        $requete->execute();
        echo 'Suppr ok';
    }
    else
    {
        echo 'Probleme';
    }