<?php
	include '../../Controller/rendezvousC.php';
	$rendezvousC=new rendezvousC();
	$rendezvousC->supprimerRDV($_GET["id"]);
	header('Location:listRDV.php');
?>