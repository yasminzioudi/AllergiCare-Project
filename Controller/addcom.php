<?php
    require_once '../config.php';

    try {
        $pdo = config::getConnexion();

        if (isset($_POST['inpTot'])) {
            $price = $_POST['inpTot'];

            $query = $pdo->prepare("INSERT INTO `com` (`id`, `idu`, `total`) VALUES (NULL, '1', :price);");
            $query->bindParam(':price', $price);

            if ($query->execute()) {
                echo '<p class="alert alert-success col-10">com added successfully!</p>';
        
            } else {
                echo '<p class="alert alert-danger col-10">com adding product.</p>';
            }
            header("Location: ../view/send.php");
            exit();
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
    ?>