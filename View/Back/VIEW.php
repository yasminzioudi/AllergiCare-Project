<?php
include __DIR__ . '/../../model/comande.php';

$c = new config();

?>

<center>
    <h1>List of players</h1>
    <h2>
        <a href="addJoueur.php">Add player</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th>Id comande</th>
        <th>Id user</th>
        <th>Monton</th>
    </tr>


    <?php
    foreach ($tab as $rup) {
    ?>




        <tr>
            <td><?= $ruq['idcomande']; ?></td>
            <td><?= $ruq['iduser']; ?></td>
            <td><?= $ruq['monton']; ?></td>
            <td align="center">
                <form method="POST" action="updateJoueur.php">
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" value=<?PHP echo $joueur['id']; ?> name="idJoueur">
                </form>
            </td>
            <td>
                <a href="deleteJoueur.php?id=<?php echo $joueur['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>