<?php

require_once __DIR__ . '/../Config.php';

class EventC
{

    function ajouterEvent($event)
    {
        $sql = "INSERT INTO event (nom, description, lieu, date, affiche) VALUES (:nom, :description, :lieu, :date, :affiche)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':nom', $event->getNom());
            $req->bindValue(':description', $event->getDescription());
            $req->bindValue(':lieu', $event->getLieu());
            $req->bindValue(':date', $event->getDate());
            $req->bindValue(':affiche', $event->getAffiche());
            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    /*function afficherEvent()
    {
        $sql = "SELECT * FROM event";
        $db = config::getConnexion();
        try {
            $search = $_GET['search'] ?? '';
            if ($search) {
                $statement = $db->prepare('SELECT * FROM event WHERE nom LIKE :nom ORDER BY date DESC');
                $statement->bindValue(':nom', "%$search%");
            } else {
                $statement = $db->prepare('SELECT * FROM abonnements ORDER BY Date_abonnement DESC');
            }
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }*/
    function afficherEvent($search)
    {
        $db = config::getConnexion();
        try {
            if ($search) {
                $statement = $db->prepare('SELECT * FROM event WHERE nom LIKE :nom ORDER BY date DESC');
                $statement->bindValue(':nom', "%$search%");
                $statement->execute();
                $liste = $statement->fetchAll();
            } else {
                $statement = $db->prepare('SELECT * FROM event ORDER BY nom DESC');
                $statement->execute();
                $liste = $statement->fetchAll();
            }

        }
        catch(PDOException $e){
                echo($e->getMessage());}
                return $liste;
    }


    function supprimerEvent($id)
    {
        $sqll = "SELECT * from participants where event_id='$id'";
        $dbb = config::getConnexion();
        try {
            $liste = $dbb->query($sqll);
            foreach ($liste as $row) {
                $sqlll = "DELETE FROM participants where id= :id";
                $dbbb = config::getConnexion();
                try {
                    $reqq = $dbbb->prepare($sqlll);
                    $reqq->bindValue(':id', $row['id']);
                    $reqq->execute();
                } catch (Exception $e) {
                    die('Erreur: ' . $e->getMessage());
                }
            }
        } catch (Exception $e) {
            die('erreur');
        }


        $sql = "DELETE FROM event where id= :id";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function modifierEvent($event)
    {
        $sql = "UPDATE event SET nom=:nom, description=:description, lieu=:lieu, date=:date, affiche=:affiche WHERE id=:id";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':nom', $event->getNom());
            $req->bindValue(':description', $event->getDescription());
            $req->bindValue(':lieu', $event->getLieu());
            $req->bindValue(':date', $event->getDate());
            $req->bindValue(':affiche', $event->getAffiche());
            $req->bindValue(':id', $event->getId());
            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function recupererEvent($id)
    {
        $sql = "SELECT * FROM event where id= '$id'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function trierEvents()
{
    $sql = "SELECT * from event ORDER BY description DESC";
    $db = config::getConnexion();
    try {
        $req = $db->query($sql);
        return $req;
    } 
    catch (Exception $e)
     {
        die('Erreur: ' . $e->getMessage());
    }
}
function archiverEvents($id){
			
    $sql="UPDATE event SET lieu = 'Tunisie' WHERE id= :id";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    try{
        $req->execute();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
}
