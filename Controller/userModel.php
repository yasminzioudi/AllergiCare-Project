<?php

// In userModel.php
require_once(__DIR__ . '/../Config.php');
include_once __DIR__ . '/../Controller/repoModele.php';



class UserModel {
    private $db;

    public function __construct() {
        // Use the getConnexion method from the config class to establish the database connection
        $this->db = config::getConnexion();
    }

    public function addResponse($feedbackId, $responseText) {
        $stmt = $this->db->prepare("INSERT INTO reponses (feedback_id, response_text) VALUES (:feedbackId, :responseText)");
        $stmt->bindParam(':feedbackId', $feedbackId);
        $stmt->bindParam(':responseText', $responseText);
        $stmt->execute();
    }

    public function getResponses() {
        $stmt = $this->db->prepare("SELECT * FROM reponses");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteResponse($responseId) {
        $stmt = $this->db->prepare("DELETE FROM `reponses` WHERE id = :responseId");
        $stmt->bindParam(':responseId', $responseId);
        $stmt->execute();
    }

    public function updateResponse($responseId, $responseText) {
        $stmt = $this->db->prepare("UPDATE reponses SET response_text = :responseText WHERE id = :responseId");
        $stmt->bindParam(':responseText', $responseText);
        $stmt->bindParam(':responseId', $responseId);
        $stmt->execute();
    }

    public function getResponseById($responseId) {
        $stmt = $this->db->prepare("SELECT * FROM reponses WHERE id = :responseId");
        $stmt->bindParam(':responseId', $responseId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getResponseByFeedbackId($feedbackId) {
        $stmt = $this->db->prepare("SELECT * FROM reponses WHERE feedback_id = :feedbackId");
        $stmt->bindParam(':feedbackId', $feedbackId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>
