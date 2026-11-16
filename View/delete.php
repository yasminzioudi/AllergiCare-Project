<?php
	include '../Controller/userC.php';
	$userC=new userC();
	$userC->supprimerUser($_GET["id"]);
	header('Location:listusers.php');
?>