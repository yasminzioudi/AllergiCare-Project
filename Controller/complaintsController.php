<?php
require_once __DIR__ . '/../Config.php';
include_once(__DIR__ . '/../Model/complaintsModel.php');


class crudComplaint
{

    public function listComplaints()
    {
        $sql = "SELECT * FROM complaints";
        $db = Config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (PDOException $e) {
            throw new Exception('Error fetching complaints: ' . $e->getMessage());
        }
    }
    

    public function getComplaint($id)
    {
        $sql = "SELECT * FROM complaints WHERE id = :id";
        $db = Config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id, PDO::PARAM_INT); // Bind the value of $id to the :id placeholder
            $query->execute();
            $complaint = $query->fetch();
            return $complaint;
        } catch (PDOException $e) {
            throw new Exception('Error fetching complaint: ' . $e->getMessage());
        }
    }
    
    public function countreclam()
    {
        $db = config::getConnexion();
        $query = $db->query("SELECT COUNT(*) FROM complaints ");
        $count = $query->fetchColumn();
        return $count;
    }
    public function countrep()
    {
        $db = config::getConnexion();
        $query = $db->query("SELECT COUNT(*) FROM reponses ");
        $count = $query->fetchColumn();
        return $count;
    }
    public function deleteComplaint($id)
    {
        $sql = "DELETE FROM complaints WHERE id = :id";
        $db = Config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id, PDO::PARAM_INT);

        try {
            $req->execute();
        } catch (PDOException $e) {
            throw new Exception('Error deleting complaint: ' . $e->getMessage());
        }
    }

    public function addComplaint($complaint)
    {
        $sql = "INSERT INTO complaints (rating, comments)
        VALUES (:rating, :comments)";
        $db = Config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'rating' => $complaint->getRating(),
                'comments' => $complaint->getComments(),
            ]);
            return $db->lastInsertId();
        } catch (PDOException $e) {
            throw new Exception('Error adding complaint: ' . $e->getMessage());
        }
    }

    public function showComplaint($id)
    {
        $sql = "SELECT * FROM complaints WHERE id = :id";
        $db = Config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
            $complaint = $query->fetch();
            return $complaint;
        } catch (PDOException $e) {
            throw new Exception('Error fetching complaint details: ' . $e->getMessage());
        }
    }

    public function updateComplaint($complaint, $id)
    {
        try {
            $db = Config::getConnexion();
            $query = $db->prepare(
                'UPDATE complaints SET 
                    rating = :rating, 
                    comments = :comments
                WHERE id = :id'
            );

            $query->execute([
                'id' => $complaint->getId(),
                'rating' => $complaint->getRating(),
                'comments' => $complaint->getComments()
            ]);

            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            throw new Exception('Error updating complaint: ' . $e->getMessage());
        }
    }
}
?>


