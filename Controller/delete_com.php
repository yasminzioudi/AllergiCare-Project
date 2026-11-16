<?php
include('../config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    try {
        $pdo = config::getConnexion();

        $sql = "DELETE FROM `com` WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        echo 'Comande bien effectuer.';
    } catch (PDOException $e) {
        echo 'Error deleting the product: ' . $e->getMessage();
    } finally {
        $pdo = null;
    }
} else {
    echo 'Unauthorized method or missing product ID.';
}
?>