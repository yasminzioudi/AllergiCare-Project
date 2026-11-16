<?php

include __DIR__ . '/../../Controller/EventC.php';

$eventC=new EventC();

$eventC->supprimerEvent($_GET['id']);
?>
<script>
    window.location.replace("listevent.php");
</script>
