<?php
require('dbConnect.php');

    $email = $_POST['emailConnect'];
    $mdp = $_POST['mdpConnect'];

if (isset($_POST['emailConnect']) && $_POST['emailConnect'] !='' && isset($_POST['mdpConnect']) && $_POST['mdpConnect'] !='' ) 
{   
    $erreur='';
    
    


     $requete = $pdo->prepare('SELECT pseudo,mdp FROM user WHERE email=:email ');
     $requete->bindParam(':email', $email);
     $requete->execute();
     $resultat  = $requete->fetch();

     if( password_verify($mdp,  $resultat['mdp'])){
     $erreur =  'Connexion réussie';
     
     /*if (session_id () == '')
     {
        session_start();
        $_SESSION['pseudo'] = $resultat['pseudo'];
       // header('Location: index.php');*/
        
     }
     else
     {
         $erreur = 'Erreur d\'authentification';
         
     }
    
}
echo $erreur;
   

    
    