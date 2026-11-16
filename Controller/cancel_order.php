<?php
session_start();

if (isset($_SESSION['selectedProducts'])) {
    unset($_SESSION['selectedProducts']);
    echo 'Order cancelled successfully!';
} else {
    echo 'No order to cancel.';
}
?>