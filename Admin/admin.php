<?php
session_start();

if(!isset($_SESSION["username"])){
  header("Location: login.php");
  exit;
}

require_once __DIR__ . '/../config/db.php';

require_once __DIR__ . '/../config/autoload.php';

$DestinationManager = new DestinationManager($db);
$destinations = $DestinationManager->findDestination();

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
  <a class="navbar-brand" href="#">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="destination.php">Creer destination</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>
  <a href="logout.php" class="btn btn-danger m-2 ">Se déconnecter</a>
</nav>


<main class="container mt-5">
    <div class="d-flex flex-wrap">
        <?php foreach ($destinations as $destination) { ?>
            <div class="card m-2" style="width: 18rem;">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $destination->getLocation()?></h5>
                    <p class="card-text">
                        Prix : <?= $destination->getPrice() ?>
                    </p>
                    <a href="./fight.php?hero_id=<?=$destination->getId()?>" class="btn btn-primary">Selectionner</a>
                </div>
            </div>
        <?php } ?>
    </div>
</main>


</body>
</html>