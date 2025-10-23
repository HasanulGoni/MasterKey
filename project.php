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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Projects</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">Project</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Projects Start -->
        <div class="container-fluid project py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">Our Projects</p>
                    <h2 class="display-4 text-capitalize mb-3">Recent Completed Projects</h2>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="project-item">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="project-img">
                                        <img src="img/project-1.jpg" class="img-fluid w-100 pt-3 ps-3" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="project-content mb-4">
                                        <p class="fs-5 text-secondary mb-2">Architecture</p>
                                        <a href="#" class="h4">We Building Everything</a>
                                        <p class="mb-0 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur tempore perferendis velit minus, perspiciatis eveniet adipisci tempora voluptatem quis dolores.</p>
                                    </div>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="project-item">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="project-img">
                                        <img src="img/project-2.jpg" class="img-fluid w-100 pt-3 ps-3" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="project-content mb-4">
                                        <p class="fs-5 text-secondary mb-2">Interior Design</p>
                                        <a href="#" class="h4">We Building Everything</a>
                                        <p class="mb-0 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur tempore perferendis velit minus, perspiciatis eveniet adipisci tempora voluptatem quis dolores.</p>
                                    </div>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="project-item">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="project-img">
                                        <img src="img/project-3.jpg" class="img-fluid w-100 pt-3 ps-3" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="project-content mb-4">
                                        <p class="fs-5 text-secondary mb-2">House & Exterior</p>
                                        <a href="#" class="h4">We Building Everything</a>
                                        <p class="mb-0 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur tempore perferendis velit minus, perspiciatis eveniet adipisci tempora voluptatem quis dolores.</p>
                                    </div>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="project-item">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="project-img">
                                        <img src="img/project-4.jpg" class="img-fluid w-100 pt-3 ps-3" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="project-content mb-4">
                                        <p class="fs-5 text-secondary mb-2">Interior Design</p>
                                        <a href="#" class="h4">We Building Everything</a>
                                        <p class="mb-0 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur tempore perferendis velit minus, perspiciatis eveniet adipisci tempora voluptatem quis dolores.</p>
                                    </div>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-secondary py-3 px-5" href="#">More Projects</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects End -->

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