<?php 
    $pdo=config::getConnexion();
    try{
        $query=$pdo->prepare(

            'UPDATE p.comande 
             SET idc=9,idp=8
             WHERE idc=7 '
        );
        $query->execute();

    } catch(PDOException $e){
        $e->getMessage();
    }


?>