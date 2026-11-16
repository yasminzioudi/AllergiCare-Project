<?php

require_once __DIR__ . '/../Config.php';

class chartC {
    public static function getConnexion()
    {
        return config::getConnexion();
    }

    public static function getTotalCategories()
    {
        $pdo = self::getConnexion();
        $query = "SELECT COUNT(*) AS total_categories FROM categorie";
        $stmt = $pdo->query($query);
        $result = $stmt->fetch();
        return $result['total_categories'];
    }

    public static function getTotalProducts()
    {
        $pdo = self::getConnexion();
        $query = "SELECT COUNT(*) AS total_products FROM products";
        $stmt = $pdo->query($query);
        $result = $stmt->fetch();
        return $result['total_products'];
    }

    public static function getProductsPerCategory()
    {
        $pdo = self::getConnexion();
        $query = "SELECT c.c_nom AS category_name, COUNT(p.Id) AS product_count
                  FROM categorie c
                  LEFT JOIN products p ON c.id_c = p.id_c
                  GROUP BY c.id_c, c.c_nom";
        $stmt = $pdo->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>
