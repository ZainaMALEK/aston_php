<?php
    if(isset($_POST['nom']) && $_POST['nom'] !=''){
        require('connexion.php');
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $categorie = $_POST['categorie'];
        $image = $_POST['image'];
        // Requete modif
        if(isset($_POST['id']) && $_POST['id'] != '')
        {
            $id = $_POST['id'];
            $requete = $pdo->prepare("UPDATE menu SET nom = :nom, categorie = :categorie, prix = :prix, image = :image WHERE id = :id");
            $requete->bindParam(':id',$id);  
        }
        else
        // REquete ajout
        {
            $requete = $pdo->prepare("INSERT INTO menu (nom,categorie, prix, image) VALUES (:nom, :categorie,:prix, :image)");
         
        }
        $requete->bindParam(':nom',$nom);
        $requete->bindParam(':categorie',$categorie);
        $requete->bindParam(':prix',$prix);
        $requete->bindParam(':image',$image);
        $requete->execute();
        echo 'true';
    }
    else
    {
        echo 'Probleme donneees';
    }