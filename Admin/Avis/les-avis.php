<?php 

require_once __DIR__ . '/../../config/db.php';

require_once __DIR__ . '/../../config/autoload.php';

$reviewManager = new ReviewManager($db);
$reviews = $reviewManager->getAllReviews();


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Page admin</title>
</head>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../destination.php">Creer destination</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../tour-operator.php">Creer Tour operator</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="les-avis.php">Les avis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../index.php">Coté utilisateur</a>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>
  <a href="logout.php" class="btn btn-danger m-2 ">Se déconnecter</a>
</nav>



<!-- les avis  -->

<div class="container">
    <div class="row">
    <?php   foreach ($reviews as $review) {?>
        <div class="col-6">
            <div class="card w-75 mt-5">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $review->getAuthor(); ?></h5>
                    <p class="card-text"><?php echo $review->getMessage();?></p>
                    <a href="supprimer-avis.php?id=<?php echo $review->getId(); ?>" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    <?php } ?> 
    </div>
</div>
