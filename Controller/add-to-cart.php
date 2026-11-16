<?php
include('../config.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productId'])) {
    $productId = $_POST['productId'];

    try {
        $pdo = config::getConnexion();
    
        $sql = "SELECT * FROM product WHERE id = :productId";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':productId', $productId, PDO::PARAM_INT);
    
        $stmt->execute();
  
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($product) {
            print_r($product);
            console($product);
        } else {
            echo 'Product not found.';
        }
    
    } catch (PDOException $e) {
        echo 'Error selecting the product: ' . $e->getMessage();
    } finally {
        $pdo = null;
    }
} else {
    echo 'Unauthorized method or missing product ID.';
}
?>
