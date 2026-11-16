<?php
require_once __DIR__ . '/../Config.php';
include_once(__DIR__ . '/../controller/userModel.php');
include_once(__DIR__ . '/../controller/RepoController.php');


$error = "";

$rep = new UserModel();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["repo"]) && isset($_POST["feedback_id"])) {
        $response_text = $_POST["repo"];
        $feedback_id = $_POST["feedback_id"];

        $repoController = new RepoController(null, $feedback_id, $response_text);

        if (!empty($feedback_id) && !empty($response_text)) {
          
            $repoController->setFeedback_id($feedback_id);
            $repoController->setResponse_text($response_text);

            $rep->addResponse($feedback_id, $response_text);

           
            header('Location: ../View/listerepo.php');
            exit;
        } else {
            $error = "Missing information";
        }
    } else {
        $error = "Response field or Complaint ID is empty";
    }
}



?>
