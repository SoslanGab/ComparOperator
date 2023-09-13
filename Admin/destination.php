<?php
require_once __DIR__ . '/../config/db.php';

require_once __DIR__ . '/../config/autoload.php';

$operatorManager = new OperatorManager($db);
$destinationManager = new DestinationManager($db);



if (isset($_POST['location']) && isset($_POST['price']) && isset($_POST['tour_operator'])) {
    $location = $_POST['location'];
    $price = $_POST['price'];
    $tourOperatorId = intval($_POST['tour_operator']);

    $destination = new Destination(['location' => $location, 'price' => $price, 'tour_operator_id' => $tourOperatorId]);

    $destinationManager->addDestination($location, $price, $tourOperatorId);

    if ($destinationManager) {
        echo "Destination ajoutée";
    }
}




  

  $operators = $operatorManager->findOperator();

var_dump ($operators);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Page admin</title>
</head>



<body>
    <div class="container mt-5">
        <h2>Ajouter une Destination</h2>
        <form  method="post">

            <div class="form-group">
            <label for="name">Location:</label>
            <input type="text" class="form-control" id="name" name="location">
            </div>

            <div class="form-group"> 
            <label for="age">Price:</label>
            <input type="number" class="form-control" id="age" name="price">
            </div>
            <input type="hidden" name="tour_operator_id" value="<?php echo $tourOperatorId; ?>">
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
            <br>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

</body>
