<?php
require '../Model/comande.php';
$bd=new config();
$pdo = $bd::getconnexion();

try{
    $query = $pdo->prepare(
        'SELECT * FROM comande'
    );
    $query->execute();
    $result = $query->fetchAll();
} catch (PDOException $e){
    $e->getMessage();
}
foreach ($result as $row){
    echo $row['idcomande'].' '.$row['iduser'].' '.$row['monton'];
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joueur </title>
</head>

<body>
    <a href="comande.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="idcomane">IDcomande :</label></td>
                <td>
                    <input type="number" id="idcomande" name="idcomande" />
                    <span id="erreurid" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="iduser">IDuser :</label></td>
                <td>
                    <input type="number" id="iduser" name="iduser" />
                    <span id="erreurid" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="monton">Monton :</label></td>
                <td>
                    <input type="number" id="monton" name="monton" />
                    <span id="erreurnonton" style="color: red"></span>
                </td>


            <td>
                <input type="submit" value="Save">
            </td>
            <td>
                <input type="reset" value="Reset">
            </td>
        </table>

    </form>
</body>

</html>