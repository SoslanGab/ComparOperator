<?php
require_once __DIR__ . '/../../config/autoload.php'; 
require_once __DIR__ . '/../../config/db.php'; 

$reviewManager = new ReviewManager($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $success = $reviewManager->deleteReview($id);
    if ($success) {
        header("Location: les-avis.php");
        exit;
    } else {
        echo "Erreur du suppression de l'avis.";
    }
}
?>
