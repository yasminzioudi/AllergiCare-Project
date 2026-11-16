<?php
	include '../../Controller/rendezvousC.php';
	$rendezvousC=new rendezvousC();
	$email="louay.kahlaoui@esprit.tn";
	$rendezvousC->accepterRDV($_GET["id"],$email);
	header('Location:listRDV.php');
?>