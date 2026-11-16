<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joueur </title>
</head>

<body>
    <a href="p.comande.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="../Controller/insert_p.comande.php" method="POST">
        <table>
            <tr>
                <td><label for="idp">IDc :</label></td>
                <td>
                    <input type="number" id="idp" name="idp" />
                    <span id="erreurid" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="idc">IDp:</label></td>
                <td>
                    <input type="number" id="idc" name="idc" />
                    <span id="erreurid" style="color: red"></span>
                </td>
            </tr>


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
