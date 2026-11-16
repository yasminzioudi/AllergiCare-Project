<?php
include "../../controller/CategorieC.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $idToDelete = $_POST['id'];
    error_log('Received ID to delete: ' . $idToDelete); 
    $categorieC = new CategorieC();
    $success = $categorieC->deleteCategorie($idToDelete);
    if ($success) {
        echo json_encode(['message' => 'Category deleted successfully']);
    } else {
        $errorMessage = $categorieC->getLastError(); 
        http_response_code(500); 
        echo json_encode(['message' => 'Error deleting category', 'error' => $errorMessage]);
    }
} else {
    http_response_code(400); 
    echo json_encode(['message' => 'Invalid request']);
}
?>
