<?php
require '../Model/comande.php';
$bd=new config();
$pdo = $bd::getconnexion();


try{
    $query = $pdo->prepare(
        'SELECT * FROM p.comande'
    );
    $query->execute();
    $result = $query->fetchAll();
} catch (PDOException $e){
    $e->getMessage();
}
foreach ($e as $row){
    echo $row['idc'].' '.$row['idp'];
}

?>