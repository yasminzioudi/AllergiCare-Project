<?php
require __DIR__ . '/../Config.php';
include(__DIR__ . '/../model/Categorie.php');


class CategorieC
{
    public function addCategorie($c_nom)
    {
        try {
            $sql = "INSERT INTO categorie (c_nom) VALUES (:c_nom)";
            $db = config::getConnexion();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':c_nom', $c_nom, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            die('Error adding category: ' . $e->getMessage());
        }
    }

    public function updateCategorie($categorie, $id)
    {
        try {
            $sql = "UPDATE categorie SET c_nom = :c_nom WHERE id_c = :id";
            $db = config::getConnexion();
            $query = $db->prepare($sql);
            $query->execute([
                'c_nom' => $categorie->getNom(),
                'id' => $id
            ]);
        } catch (Exception $e) {
            die('Error updating category: ' . $e->getMessage());
        }
    }
    public function deleteCategorie($id)
    {
        try {
            $db = Config::getConnexion();
            $query = "DELETE FROM categorie WHERE id_c = :id";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            error_log('Error deleting category: ' . $e->getMessage());
            return false;
        }
    }
    

    public function listCategorie()
    {
        try {
            $sql = "SELECT * FROM categorie";
            $db = config::getConnexion();
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error listing categories: ' . $e->getMessage());
        }
    }


    public function showCategorie($id)
    {
        try {
            $sql = "SELECT * FROM categorie WHERE id_c = :id";
            $db = config::getConnexion();
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id);
            $query->execute();
            $categorie = $query->fetch();
            return $categorie;
        } catch (Exception $e) {
            die('Error showing category: ' . $e->getMessage());
        }
    }
    public function categoryExists($nom)
    {
        try {
            $db = config::getConnexion();
            $sql = "SELECT * FROM categorie WHERE c_nom = :nom";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            return $count > 0;
        } catch (Exception $e) {
            die('Error checking category existence: ' . $e->getMessage());
        }
    }
    public function searchCategories($searchTerm)
{
    try {
        $db = config::getConnexion();
        $sql = "SELECT * FROM categorie WHERE c_nom LIKE :searchTerm";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (Exception $e) {
        die('Error searching categories: ' . $e->getMessage());
    }
}
}

?>