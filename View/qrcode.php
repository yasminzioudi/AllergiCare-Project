<?php

include '../Controller/rendezvousC.php';
$error = "";

$rdvC = new rendezvousC();
$r = $rdvC->recupererRDV($_GET['id']);
$rdvC->QrCode($r);
?>
