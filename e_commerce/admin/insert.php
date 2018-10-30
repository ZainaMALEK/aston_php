<?php
require ('../dbConnect.php');
$productName = $_POST['productName'];
$price = $_POST['price'];
$description = $_POST['description'];

echo $productName;
echo $price;
echo $description;

if (isset($productName) && $productName !='' && isset($price) && $price !='' && isset($price) && $price !=''){
 
	$requete = $pdo->prepare('INSERT INTO product(productName,price, description) VALUES(:productName, :price, :description)');
	$requete->bindParam(':productName', $productName);
    $requete->bindParam(':price', $price);
    $requete->bindParam(':description', $description);
    
    $requete->execute();

    $erreur = 'insertion réussie';
}

echo $erreur;