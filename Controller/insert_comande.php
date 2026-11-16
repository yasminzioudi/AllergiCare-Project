<?php 
    require '../Model/comande.php';
    $bd=new config();
$pdo = $bd::getconnexion();


    try{
        $query=$pdo->prepare(
            'INSERT INTO comande (idcomande,iduser,monton) VALUES (:id, :idu, :monton);'
        );
        $query->execute([
            ':id' => $_POST['idcomande'],
            ':idu' => $_POST['iduser'],
            ':monton' => $_POST['monton'] ,
        ]);
    } catch(PDOException $e){
        $e->getMessage();
    }
    ?>

