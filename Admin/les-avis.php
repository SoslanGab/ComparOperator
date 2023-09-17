<?php 

require_once __DIR__ . '/../config/db.php';

require_once __DIR__ . '/../config/autoload.php';

?>





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
        <a class="nav-link" href="tour-operator.php">Creer Tour operator</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="les-avis.php">Les avis</a>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>
  <a href="logout.php" class="btn btn-danger m-2 ">Se déconnecter</a>
</nav>