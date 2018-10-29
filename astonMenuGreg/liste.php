
<?php
    require('connexion.php');
    if(isset($_POST['id']) && $_POST['id'] != '')
    {
        $id = $_POST['id'];
        $resultats = $pdo->prepare("SELECT * FROM menu WHERE id = :id");
        $resultats->bindParam(':id',$id);
    }
    else
    {
        $resultats = $pdo->prepare("SELECT * FROM menu ORDER BY nom");
    }
    $resultats->execute();
    $results = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    echo $json;

                    