<?php 
    require '../Model/comande.php';
    $pdo=config::getConnexion();
    try{
        $query=$pdo->prepare(

            'DELETE FROM categorie WHERE idcomande=7'
        );
        $query->execute();
    } catch(PDOException $e){
        $e->getMessage();
    }


?>