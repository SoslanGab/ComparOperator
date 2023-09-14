<?php
require_once __DIR__ . '/../config/db.php';

require_once __DIR__ . '/../config/autoload.php';

$operatorManager = new OperatorManager($db);




if (isset($_POST['name']) && isset($_POST['link'])) {
    $name = $_POST['name'];
    $link = $_POST['link'];

    $operatorManager->addOperator($name, $link);

    if ($operatorManager) {
        echo "Operator ajouté";
    } else {
        echo "Erreur";
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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin.php">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="destination.php">Creer destination</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tour-operator.php">Creer Tour operator</a>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>
  <a href="logout.php" class="btn btn-danger m-2 ">Se déconnecter</a>
</nav>

    <div class="container mt-5">
        <h2>Ajouter une Destination</h2>
        <form  method="post">

            <div class="form-group">
            <label for="name">Nom operator:</label>
            <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group"> 
            <label for="age">link:</label>
            <input type="text" class="form-control" id="link" name="link">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

</body>
