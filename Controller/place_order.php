<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        if (isset($_SESSION['selectedProducts']) && !empty($_SESSION['selectedProducts'])) {
            $selectedProducts = $_SESSION['selectedProducts'];

            $totalPrice = 0;
            foreach ($selectedProducts as $product) {
                $totalPrice += $product['price'] * $product['quantity'];
            }

            $subject = 'Order Confirmation';
            $message = 'Thank you for your order!' . "\r\n";
            $message .= 'Total Price: ' . $totalPrice . "\r\n";

            mail($email, $subject, $message);

            unset($_SESSION['selectedProducts']);

            echo 'Order placed successfully!';
        } else {
            echo 'No products in the order.';
        }
    } else {
        echo 'Invalid email address.';
    }
} else {
    echo 'Invalid request method.';
}
?>
