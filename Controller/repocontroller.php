<?php

// Include the UserModel class
require_once(__DIR__ . '/../Config.php');
include_once __DIR__ . '/../Controller/repoModele.php';
include_once __DIR__ . '/../Controller/UserModel.php';




class RepoControllers {
    private $userModel;

    public function __construct($id = null) {
        // Initialize $userModel here or pass it as an argument
        $this->userModel = new UserModel(); // Replace with your actual model class
    }

    public function showResponseForm() {
        include_once 'view/reponse.php';
    }

    public function submitResponse($feedbackId, $responseText) {
        // Ajoutez la réponse à la base de données en utilisant le modèle
        $this->userModel->addResponse($feedbackId, $responseText);

        // Redirige après la soumission du formulaire
        header("Location: index.php");
        exit();
    }

    public function listResponses() {
        // Récupère toutes les réponses depuis la base de données en utilisant le modèle
        $responses = $this->userModel->getResponses();
        //include_once 'view/liste_reponses.php'; // Affiche la vue de la liste des réponses
    }

    public function deleteResponse($responseId) {
        // Supprime une réponse de la base de données en utilisant le modèle
        $this->userModel->deleteResponse($responseId);

        // Redirige après la suppression
        header("Location: index.php");
        exit();
    }

    public function showUpdateForm($responseId) {
        // Affiche le formulaire de modification de réponse avec les données actuelles
        $response = $this->getResponseById($responseId);
        include_once 'view/modifier_reponse.php'; // Créez une vue pour le formulaire de modification
    }

    public function updateResponse($responseId, $responseText) {
        // Met à jour le texte de la réponse dans la base de données en utilisant le modèle
        $this->userModel->updateResponse($responseId, $responseText);

        // Redirige après la mise à jour
        header("Location: index.php");
        exit();
    }

    public function getResponseById($responseId) {
        // Récupère les détails d'une réponse en fonction de son ID en utilisant le modèle
        return $this->userModel->getResponseById($responseId);
    }
    public function getResponseByFeedbackId($feedbackId) {
        // Récupère les détails d'une réponse en fonction de son ID en utilisant le modèle
        return $this->userModel->getResponseByFeedbackId($feedbackId);
    }
}

?>
