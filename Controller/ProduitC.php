<?php

require_once __DIR__ . '/../Config.php';
class ProduitC
{
    public function listProduit($id_c = null, $minPrice = null, $maxPrice = null, $sortOrder = 'asc', $disponibility = null)
{
    try {
        $db = config::getConnexion();
        $sql = "SELECT * FROM products WHERE 1";

        if ($id_c !== null && $id_c != 'all') {
            $sql .= " AND id_c = :id_c";
        }

        if ($minPrice !== null && $minPrice !== '') {
            $sql .= " AND CAST(Price AS DECIMAL(10,2)) >= CAST(:minPrice AS DECIMAL(10,2))";
        }

        if ($maxPrice !== null && $maxPrice !== '') {
            $sql .= " AND CAST(Price AS DECIMAL(10,2)) <= CAST(:maxPrice AS DECIMAL(10,2))";
        }

        if ($disponibility !== null && $disponibility !== '') {
            $sql .= " AND disponibility = :disponibility";
        }

        $sql .= " ORDER BY Price $sortOrder";

        $statement = $db->prepare($sql);

        if ($id_c !== null && $id_c != 'all') {
            $statement->bindParam(':id_c', $id_c, PDO::PARAM_INT);
        }

        if ($minPrice !== null && $minPrice !== '') {
            $statement->bindParam(':minPrice', $minPrice, PDO::PARAM_STR);
        }

        if ($maxPrice !== null && $maxPrice !== '') {
            $statement->bindParam(':maxPrice', $maxPrice, PDO::PARAM_STR);
        }

        if ($disponibility !== null && $disponibility !== '') {
            $statement->bindParam(':disponibility', $disponibility, PDO::PARAM_STR);
        }

        $statement->execute();
        $liste = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $liste;
    } catch (Exception $e) {
        die('Error listing products: ' . $e->getMessage());
    }
}


    public function showProduit($id) {
        try {
            $db = config::getConnexion();
            $sql = "SELECT * FROM products WHERE id = :id";
            $statement = $db->prepare($sql);
            $statement->bindParam(':id', $id, PDO::PARAM_INT);
            $statement->execute();
            $produit = $statement->fetch(PDO::FETCH_ASSOC);

            return $produit;
        } catch (Exception $e) {
            die('Error fetching product details: ' . $e->getMessage());
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
public function handleImageUpload()
    {
        try {
            $IMAGE = $_FILES['image'];
            $img_loc = $_FILES['image']['tmp_name'];
            $img_Name = $_FILES['image']['name'];            
            $img_des = "../uploadImage/" . $img_Name;
            move_uploaded_file($img_loc, '../uploadImage/' . $img_Name);
            return $img_des;
        } catch (Exception $e) {
            die('Error handling image upload: ' . $e->getMessage());
        }
    }

    public function addProduit($Name,$Price,$Image,$id_c,$disponibility = null)
    {
        $img_des = $this->handleImageUpload();
        $db = config::getConnexion();
 
        $sql = "INSERT INTO products (Name,Price,Image,id_c,disponibility) VALUES (:Name, :Price,:Image,:id_c,:disponibility)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':Name', $Name, PDO::PARAM_STR);
        $stmt->bindParam(':Price', $Price, PDO::PARAM_STR);
        $stmt->bindParam(':Image', $img_des, PDO::PARAM_STR);
        $stmt->bindParam(':id_c', $id_c, PDO::PARAM_STR);
        $stmt->bindParam(':disponibility', $disponibility, PDO::PARAM_STR);
        $stmt->execute();
}

public function updateProduit($produit, $id)
{
    try {
        $img_des = $this->handleImageUpload();
        $sql = "UPDATE products SET Name = :Name, Price = :Price, Image = :image, id_c = :id_c, disponibility = :disponibility WHERE Id = :id";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'Name' => $produit->getName(),
            'Price' => $produit->getPrice(),
            'image' => $img_des,
            'id_c' => $produit->getCategoryId(),
            'disponibility' => $produit->getDisponibility(),
            'id' => $id
        ]);
    } catch (Exception $e) {
        die('Error updating product: ' . $e->getMessage());
    }
}

public function deleteProduit($id)
{
    try {
        $db = config::getConnexion();
        $sql = "DELETE FROM products WHERE Id = :id";
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();
        return true;
    } catch (Exception $e) {
        die('Error deleting product: ' . $e->getMessage());
    }
}
public function listProduitBACK($searchTerm = null)
{
    try {
        $db = config::getConnexion();
        $sql = "SELECT products.*, categorie.c_nom FROM products
                LEFT JOIN categorie ON products.id_c = categorie.id_c";
        $conditions = array();
        if ($searchTerm !== null) {
            $conditions[] = "products.Name LIKE :searchTerm";
        }
        if (!empty($conditions)) {
            $sql .= " WHERE " . implode(" AND ", $conditions);
        }

        $statement = $db->prepare($sql);
        if ($searchTerm !== null) {
            $searchParam = '%' . $searchTerm . '%';
            $statement->bindParam(':searchTerm', $searchParam, PDO::PARAM_STR);
        }

        $statement->execute();
        $liste = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $liste;
    } catch (Exception $e) {
        die('Error listing products: ' . $e->getMessage());
    }
}



}?>
