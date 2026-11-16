<?php
session_start();


include('../config.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productId'])) {
    $productId = $_POST['productId'];
    $quantity = $_POST['quantity'];

    try {
        $pdo = config::getConnexion();

        $sql = "SELECT * FROM product WHERE id = :productId";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':productId', $productId, PDO::PARAM_INT);

        $stmt->execute();

        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($product) {
            $selectedProducts = isset($_SESSION['selectedProducts']) ? $_SESSION['selectedProducts'] : [];

            $existingProductKey = array_search($productId, array_column($selectedProducts, 'id'));

            if ($existingProductKey !== false) {
                $selectedProducts[$existingProductKey]['quantity'] += $quantity; 
                echo 'Product selected successfully.';

            } else {
              
                $selectedProducts[] = [
                    'id' => $productId,
                    'name' => $product['name'], 
                    'price' => $product['price'],
                    'quantity' => $quantity, 
                ];
            }


            $_SESSION['selectedProducts'] = $selectedProducts;

            echo 'Product selected successfully.';
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
