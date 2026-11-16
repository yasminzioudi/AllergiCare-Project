<?php
session_start();

$cartCount = 0;

if (isset($_SESSION['selectedProducts'])) {
    $cartCount = count($_SESSION['selectedProducts']);
}

echo $cartCount;
?>
