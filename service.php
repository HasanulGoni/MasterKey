<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>MasterKey - Building Construction Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
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

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">Service</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Services Start -->
        <div class="container-fluid service bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">Our Services</p>
                    <h2 class="display-4 text-capitalize mb-3">our service is creative, & decent</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/service-1.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                    <i class="fas fa-home text-primary fa-4x"></i>
                                </div>
                                <a href="#" class="d-block fs-4 my-4">General Construction</a>
                                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, minima!</p>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                            <div class="service-tytle">
                                <div class="d-flex align-items-center ps-4 w-100">
                                    <h4>General Construction</h4>
                                </div>
                                <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                    <i class="fas fa-home text-primary fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/service-2.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                    <i class="fas fa-users-cog text-primary fa-4x"></i>
                                </div>
                                <a href="#" class="d-block fs-4 my-4">Property Maintenance</a>
                                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, minima!</p>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                            <div class="service-tytle">
                                <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                    <h4>Property Maintenance</h4>
                                </div>
                                <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                    <i class="fas fa-users-cog text-primary fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/service-3.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                    <i class="fas fa-hospital-user text-primary fa-4x"></i>
                                </div>
                                <a href="#" class="d-block fs-4 my-4">Project managment</a>
                                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, minima!</p>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                            <div class="service-tytle">
                                <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                    <h4>Project managment</h4>
                                </div>
                                <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                    <i class="fas fa-hospital-user text-primary fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/service-4.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                    <i class="fas fa-file-invoice-dollar text-primary fa-4x"></i>
                                </div>
                                <a href="#" class="d-block fs-4 my-4">Virtual Design & Build</a>
                                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, minima!</p>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                            <div class="service-tytle">
                                <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                    <h4>Virtual Design & Build</h4>
                                </div>
                                <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                    <i class="fas fa-file-invoice-dollar text-primary fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/service-5.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                    <i class="fas fa-cogs text-primary fa-4x"></i>
                                </div>
                                <a href="#" class="d-block fs-4 my-4">Preconstruction</a>
                                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, minima!</p>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                            <div class="service-tytle">
                                <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                    <h4>Preconstruction</h4>
                                </div>
                                <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                    <i class="fas fa-cogs text-primary fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/service-6.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                    <i class="fas fa-sitemap text-primary fa-4x"></i>
                                </div>
                                <a href="#" class="d-block fs-4 my-4">Design Build</a>
                                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, minima!</p>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                            <div class="service-tytle">
                                <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                    <h4>Design Build</h4>
                                </div>
                                <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                    <i class="fas fa-sitemap text-primary fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-secondary py-3 px-5 mt-4" href="#">More Services</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Fact Counter -->
        <div class="container-fluid counter py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-thumbs-up fa-4x text-secondary"></i>
                                    <h4 class="text-dark my-4">Completed Projects</h4>
                                    <div class="counter-counting">
                                        <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">456</span>
                                        <span class="h1 fw-bold text-secondary">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-users fa-4x text-secondary"></i>
                                    <h4 class="text-dark my-4">Happy Customers</h4>
                                    <div class="counter-counting">
                                        <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">513</span>
                                        <span class="h1 fw-bold text-secondary">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-user fa-4x text-secondary"></i>
                                    <h4 class="text-dark my-4">Qualified Engineers</h4>
                                    <div class="counter-counting">
                                        <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">53</span>
                                        <span class="h1 fw-bold text-secondary">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-heart fa-4x text-secondary"></i>
                                    <h4 class="text-dark my-4">Years Experiance</h4>
                                    <div class="counter-counting">
                                        <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">17</span>
                                        <span class="h1 fw-bold text-secondary">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center pt-4 wow fadeInUp" data-wow-delay="0.9s">
                        <a class="counter-btn btn btn-secondary py-3 px-5" href="#">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Counter -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">Testimonials</p>
                    <h2 class="display-4 text-capitalize mb-3">Our clients reviews.</h2>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.4s">
                    <div class="testimonial-item bg-light p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="me-4">
                                    <img src="img/testimonial-1.jpg" class="img-fluid w-100" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="d-block">
                                    <h4 class="text-dark">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex text-secondary pe-5">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="me-4">
                                    <img src="img/testimonial-2.jpg" class="img-fluid w-100" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="d-block">
                                    <h4 class="text-dark">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex text-secondary pe-5">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-muted"></i>
                                        <i class="fas fa-star text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="me-4">
                                    <img src="img/testimonial-3.jpg" class="img-fluid w-100" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="d-block">
                                    <h4 class="text-dark">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex text-secondary pe-5">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
            <?php include 'views/components/footer.php'; ?>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
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