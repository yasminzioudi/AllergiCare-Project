<?php
require_once __DIR__ . '/../Config.php';
include_once(__DIR__ . '/../controller/complaintsController.php');
require_once __DIR__ .'/../view/back/listComplaints.php';

$error = "";

// Assuming you have an id, rating, and comments to pass
$id = 'your_id';
$rating = 'your_rating';
$comments = 'your_comments';

$complaintController = new ComplaintsController($id, $rating, $comments);

// create complaint
$complaint = null;

// create an instance of the controller
$ctrl = new crudComplaint();

if (
    isset($_POST["rating"]) &&
    isset($_POST["comments"])
) {
    if (
        !empty($_POST["rating"]) &&
        !empty($_POST["comments"])
    ) {
        $complaintController->setRating($_POST['rating']);
        $complaintController->setComments($_POST['comments']);

        $ctrl->addComplaint($complaintController);

        // Send email notification to the admin
        $adminEmail = "farah.zouari@esprit.tn"; // Replace with the admin's email
        $subject = "New Complaint Submitted";
        $message = "A new complaint has been submitted.\n\nRating: {$_POST['rating']}\nComments: {$_POST['comments']}";
        $headers = "From: webmaster@example.com"; // Replace with a valid from address

        mail($adminEmail, $subject, $message, $headers);
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Popup</title>
            <link rel="stylesheet" href="../view/stylepop.css">
        </head>

        <body>
            <div class="popup" id="popup">
                <img src="../view/404-tick.png" alt="tick">
                <h2>
                    Thank you!
                </h2>
                <button type="button" onclick="closePopup()">OK</button>
                <p>Your details have been successfully submitted. Thanks!</p>
            </div>
            <script>
                function openPopup() {
                    document.getElementById("popup").classList.add("open-popup");

                    // Adjust the delay as needed (in milliseconds)
                    setTimeout(function () {
                        window.location.href = 'index.php';
                    }, 5500);
                }

                function closePopup() {
                    document.getElementById("popup").classList.remove("open-popup");
                }

                // Open the popup on page load
                document.addEventListener("DOMContentLoaded", function () {
                    openPopup();
                });
            </script>
        </body>

        </html>
<?php
        exit;
    } else {
        $error = "Missing information";
    }
}

?>
