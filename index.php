<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>MasterKey - Building Property Management Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <?php include 'views/components/head.php'; ?>
    </head>

    <body>

        <!-- Spinner Start -->
         <?php include 'views/components/spinner.php'; ?>
        <!-- Spinner End -->


        <!-- Topbar Start -->
         <?php include 'views/components/topbar.php'; ?>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
         <?php include 'views/components/navhero.php'; ?>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Carousel Start -->
        <div class="container-fluid overflow-hidden px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="First slide"/>
                        <div class="carousel-caption">
                            <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Property Management Business</p>
                            <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">We build somethings new and consistent.</h1>
                            <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Apply Now</a>
                                <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Second slide"/>
                        <div class="carousel-caption">
                            <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Property Management Business</p>
                            <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">We build somethings new and consistent.</h1>
                            <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Apply Now</a>
                                <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-3.jpg" class="img-fluid w-100" alt="Third slide"/>
                        <div class="carousel-caption">
                            <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Property Management Business</p>
                            <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">We build somethings new and consistent.</h1>
                            <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Apply Now</a>
                                <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn-lg-square fadeInLeft animate__animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fas fa-chevron-left fa-2x"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn-lg-square fadeInRight animate__animated" aria-hidden="true" data-animation="fadeInRight" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fas fa-chevron-right fa-2x"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
         <?php include 'views/components/about.php'; ?>
        <!-- About End -->

        <!-- Features Start -->
         <?php include 'views/components/features.php'; ?>
        <!-- Features End -->


        <!-- Services Start -->
            <?php include 'views/components/services.php'; ?>
        <!-- Services End -->

        <!-- Fact Counter -->
         <?php include 'views/components/factcounter.php'; ?>
        <!-- Fact Counter -->

        <!-- Projects Start -->
         <?php include 'views/components/projects.php'; ?>
        <!-- Projects End -->

        <!-- Team Start -->
         <?php include 'views/components/team.php'; ?>
        <!-- Team End -->

        <!-- Blog Start -->
         <?php include 'views/components/blog.php'; ?>
        <!-- Blog End -->

        <!-- Testimonial Start -->
            <?php include 'views/components/testimonial.php'; ?>
        <!-- Testimonial End -->

        <!-- Footer Start -->
            <?php include 'views/components/footer.php'; ?>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
         <?php include 'views/components/copyright.php'; ?>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>