<?php
require('dbConnect.php');

    $erreur = '';
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $pseudo = $_POST['pseudo'];
    $mdp2 = $_POST['mdp2'];
    $age = $_POST['age'];


if (isset($email) && $email !='' && isset($mdp) && $mdp !='' && isset($pseudo) && $pseudo !='') {
    echo "ok";
    
    

        if(filter_var($email, FILTER_VALIDATE_EMAIL) )
        {
            if($mdp == $mdp2){
            $mdp = password_hash($mdp, PASSWORD_BCRYPT);

            $requete = $pdo->prepare('INSERT INTO user(pseudo,email, mdp, age) VALUES(:pseudo, :email, :mdp, :age)');
            $requete->bindParam(':pseudo', $pseudo);
            $requete->bindParam(':email', $email);
            $requete->bindParam(':mdp', $mdp);
            $requete->bindParam(':age', $age);
            $requete->execute();

            $erreur = 'Inscription réussie';
            }else{
            $erreur = 'Les deux mots de passe ne sont pas identiques';
            }
        }else{
        $erreur = 'Format email incorrect';
            
        }
    }
    echo $erreur;
   

    
    

   
