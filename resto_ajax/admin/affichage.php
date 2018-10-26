<?php
require('../connexion.php');

$resultats = $pdo->prepare("SELECT * FROM menu ORDER BY nom");
$resultats->execute();
$results = $resultats->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;

?>
