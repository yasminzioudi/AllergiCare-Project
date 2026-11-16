<?php
include('../config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productId'])) {
    $productId = $_POST['productId'];

    try {
        $pdo = config::getConnexion();

        $sql = "DELETE FROM product WHERE id = :productId";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':productId', $productId, PDO::PARAM_INT);

        $stmt->execute();

        echo 'Product deleted successfully.';
    } catch (PDOException $e) {
        echo 'Error deleting the product: ' . $e->getMessage();
    } finally {
        $pdo = null;
    }
} else {
    echo 'Unauthorized method or missing product ID.';
}
?>