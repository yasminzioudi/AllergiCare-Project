<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['key'])) {
    $key = $_POST['key'];

    if (isset($_SESSION['selectedProducts']) && is_array($_SESSION['selectedProducts'])) {
        unset($_SESSION['selectedProducts'][$key]);

        $_SESSION['selectedProducts'] = array_values($_SESSION['selectedProducts']);

        echo 'Product removed successfully.';
    } else {
        echo 'No products in the session.';
    }
} else {
    echo 'Invalid request.';
}
?>
