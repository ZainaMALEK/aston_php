<?php
require('dbConnect.php');

if (isset($_POST['email']) && $_POST['email'] !='' && isset($_POST['mdp']) && $_POST['mdp'] !='' ) 
{
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    


     $requete = $pdo->prepare('SELECT pseudo,mdp FROM user WHERE email=:email ');
     $requete->bindParam(':email', $email);
     $requete->execute();
     $resultat  = $requete->fetch();

     if( password_verify($mdp,  $resultat['mdp']))
    {
     $erreur =  'Connexion réussie';
     
     if (session_id () == '')
     {
        session_start();
        $_SESSION['pseudo'] = $resultat['pseudo'];
        header('Location: index.php');
        
     }
     else
     {
         $erreur = 'Erreur d\'authentification';
         
     }
    }
}
echo $erreur;
   

    
    