<?php 
    require '../Model/p.comande.php';
    $bd=new config();
$pdo = $bd::getconnexion();


    try{
        $query=$pdo->prepare(
            'INSERT INTO p.comande (idp,idc) VALUES (:id, :id2);'
        );
        $query->execute([
            ':id' => $_POST['idp'],
            ':id2' => $_POST['idc'],
        ]);
    } catch(PDOException $e){
        $e->getMessage();
    }
    ?>
