<?php
require_once 'config/autoload.php';
require_once 'config/db.php';
include 'header.php';

$operatorManager = new OperatorManager($db);
$operators = $operatorManager->findOperator();
$reviewManager = new ReviewManager($db);
$reviews = $reviewManager->getAllReviews();

// foreach ($reviews as $review) {
//     echo '<div class="testimonial-item">';
//     echo '<p>' . $review->getMessage() . '</p>';
//     echo '<p class="author">Auteur : ' . $review->getAuthor() . '</p>';
//     echo '</div>';
// }

?>

<body>
    <div class=" bg-white p-0">
        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Avis</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Avis</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Testimonial Start -->
        <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
            <div class="container">
                <div class="row">
                    <?php   foreach ($reviews as $review) {?>
                        <div class="col-6">
                            <div class="owl-carousel testimonial-carousel py-5">
                                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                                    <p><?php echo $review->getMessage()?></p>
                                    <div class="d-flex align-items-center">
                                        <!-- <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;"> -->
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
                        </div>
                        
                    <?php } ?>
                </div>
            </div>
            <a href="ajouteravis.php" class="btn btn-primary py-md-3   d-flex justify-content-center animated ">Ajouter un Avis</a>
        </div>
        <!-- Testimonial End -->
        

        

     

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

<?php include 'footer.php' ?>
</body>
</html>