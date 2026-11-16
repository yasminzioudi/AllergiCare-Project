<?php 
    require '../Model/p.comande.php';
    $pdo=config::getConnexion();
    try{
        $query=$pdo->prepare(

            'DELETE FROM categorie WHERE idc=6'
        );
        $query->execute();
    } catch(PDOException $e){
        $e->getMessage();
    }


?>