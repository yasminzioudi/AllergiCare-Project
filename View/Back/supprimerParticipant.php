<?php
include __DIR__ . '/../../Controller/ParticipantsC.php';

$participants=new ParticipantsC();

$participants->supprimerParticipants($_GET['id']);

?>
<script>
    window.location.replace("participants.php");
</script>
