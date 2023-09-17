<?php
require_once 'config/autoload.php';
require_once 'config/db.php';
include 'header.php';


$reviewManager = new ReviewManager($db);
$reviews = $reviewManager->getAllReviews();
$operatorManager = new OperatorManager($db);
$operators = $operatorManager->findOperator();
$destinationManager = new DestinationManager($db);

$destinations = $destinationManager->findDestination();






?>



<body>
    <div class=" bg-white p-0">


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="https://media.privileges-voyages.com/resizer/r/800-450-1-70-0/76535_Amanjena-1200x700.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">NOTE ETOILE</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Découvrez nos voyages du moment</h1>
                                <a href="#voyage" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">Réserver votre voyage</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="https://www.cercledesvoyages.com/wp-content/uploads/2020/12/Canada-Chic-et-Charme.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">NOTE ETOILE</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Découvrez nos voyages du moment</h1>
                                <a href="#voyage" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">Réserver votre voyage</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">A propos de nous</h6>
                        <h1 class="mb-4">Bienvenu sur <span class="text-primary text-uppercase">ComparOperator</span></h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Voyage</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- voyage Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Nos voyages</h6>
                    <h1 class="mb-5">Explorer nos <span class="text-primary text-uppercase">voyages</span></h1>
                </div>
                <div id="voyage" class="row g-4">
                     <?php //var_dump($destinations); ?> 
                        <?php  foreach ($destinations as $destination) { ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="room-item shadow rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="img/room-1.jpg" alt="">
                                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"><?= $destination->getPrice()?>$</small>
                                    </div>
                                    <div class="p-4 mt-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0"><?= $destination->getLocation()?></h5>
                                            <div class="ps-2">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Voir détails</a>
                                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="<?php //$destination->getLink()?>">Réserver maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                </div>
            </div>
        </div>
        <!-- Voyage End -->

                            
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Découvrez nos voyage en video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Start -->



       <!-- Testimonial Start -->
       <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="section-title text-center text-primary text-uppercase">avis</h3>
                </div>
                <?php $count = 0; // Initialiser un compteur ?>
                <?php foreach ($reviews as $review) { ?>
                    <?php if ($count < 3) { // Limitez le nombre d'avis à 3 ?>
                        <div class="owl-carousel testimonial-carousel py-5">
                            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                                <p><?php echo $review->getMessage() ?></p>
                                <div class="d-flex align-items-center">
                                    <div class="ps-3">
                                        <h6 class="fw-bold mb-1"><?php echo $review->getAuthor() ?></h6>
                                        <small>
                                            <?php
                                            $operatorId = $review->getTour_operator_id();
                                            foreach ($operators as $operator) {
                                                if ($operator->getID() === $operatorId) {
                                                    echo 'Voyagiste : ' . $operator->getName();
                                                    break;
                                                }
                                            }
                                            ?>
                                        </small>
                                    </div>
                                </div>
                                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                            </div>
                        </div>
                        <?php $count++; // Incrémentez le compteur ?>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <a href="ajouteravis.php" class="btn btn-primary py-md-3   d-flex justify-content-center animated ">Ajouter un Avis</a>
                    </div>
                    <div class="col-6">
                        <a href="avis.php" class="btn btn-primary py-md-3   d-flex justify-content-center animated ">Voir tout les avis</a>
                    </div>
                </div>
            </div>
        </div>


<?php include 'footer.php'; ?>
</body>

</html>