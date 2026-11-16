<?php
include '../../controller/ProduitC.php';

$produitC = new ProduitC();
$produitC->deleteProduit($_GET["id"]);
header('Location: listProduit.php');