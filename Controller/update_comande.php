<?php 
    $pdo=config::getConnexion();
    try{
        $query=$pdo->prepare(

            'UPDATE comande 
             SET idcomande=5,iduser=2,monton=150
             WHERE idcomande=7 '
        );
        $query->execute();

    } catch(PDOException $e){
        $e->getMessage();
    }


?>