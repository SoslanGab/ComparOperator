<?php
require_once 'config/autoload.php';
require_once 'config/db.php';
include 'header.php';

$operatorManager = new OperatorManager($db);
$destinationManager = new DestinationManager($db);
$reviewManager = new ReviewManager($db);

$operators = $operatorManager->findOperator();



if (isset($_POST['author']) && isset($_POST['message']) && isset($_POST['tour_operator'])) {
    $author = $_POST['author'];
    $message = $_POST['message'];
    $tourOperatorId = intval($_POST['tour_operator']);

    $reviewManager->addReview($author, $message,$tourOperatorId );

    if ($reviewManager) {
        echo "Operator ajouté";
    } else {
        echo "Erreur";
    }
}

?>




<div class="container mt-5">
    <h2>Ajouter un avis</h2>
    <form  method="post">
        <div class="form-group">
        <label for="name">Votre nom:</label>
        <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group">
                <label for="gender">Tour Operator:</label>
                <select class="form-control" id="gender" name="tour_operator">
                    <?php
                    foreach ($operators as $operator) {
                        echo '<option value="' . $operator->getID() . '">' . $operator->getName() . '</option>';
                    }
                    ?>
                </select>
            </div>
        <div class="form-group"> 
        <label for="age">Message:</label>
        <input type="message" class="form-control" id="message" name="message">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>