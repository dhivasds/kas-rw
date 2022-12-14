<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="20">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom " id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="index.html">
                <img src="images/logo-dark.png" alt="" class="logo-dark" height="28" />
                <img src="images/logo-light.png" alt="" class="logo-light" height="28" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="" data-feather="menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto navbar-center" id="navbar-navlist">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#team" class="nav-link">Team</a>
                    </li>
                </ul>
                <a href="login.php" class="btn btn-sm rounded-pill nav-btn ms-lg-3">Sign In</a>
            </div>
        </div>
        <!-- end container -->
    </nav>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="hero-1 bg-center bg-primary position-relative" style="background-image: url(images/hero-1-bg.png);" id="home">
        <div class="container">
            <div class="row align-items-center hero-content">
                <div class="col-lg-5">
                    <h1 class="text-white display-4 font-weight-semibold mb-4 hero-1-title">Kelola Keuangan Rusun Warga
                    </h1>
                    <p class="text-white-70 mb-4  mb-lg-5">Nemo enim ipsam voluptatem quia voluptas sit aut aspernatur
                        aut fugit sed quia consequuntur magni dolores ratione voluptatem nesciunt.</p>
                    <a href="javascript: void(0);" class="btn btn-lg btn-light rounded-pill me-2">Get Started</a>
                    <div class="d-inline-block" data-bs-toggle="modal" data-bs-target="#watchvideomodal">
                        <a href="javascript: void(0);" class="video-play-icon text-white">
                            <span class="play-icon-circle align-middle me-2"><i class="icon-sm icon" data-feather="play"></i></span>
                            <span>Watch The Video!</span>
                        </a>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-sm-10 mx-auto ms-lg-auto me-lg-0">
                    <div class="mt-lg-0 mt-4">
                        <img src="images/hero.png" alt="" class="img-md-responsive" width="690" height="520" />
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                    <div class="modal-content hero-modal-0 bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <video id="VisaChipCardVideo" class="w-100" controls="">
                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                            <!--Browser does not support <video> tag -->
                        </video>
                    </div>
                </div>
            </div>
            <!-- end modal -->
        </div>
        <!-- end container -->
        <div class="hero-bottom-shape">
            <img src="images/hero-1-bottom-shape.png" alt="" class="img-fluid d-block mx-auto" />
        </div>
        <!-- end hero shape -->
    </section>
    <!-- Hero End -->

    <!-- Services start -->
    <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center">
                    <h2 class="fw-bold">Our Services</h2>
                    <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque laudantium totam rem ab illo inventore.</p>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-box text-center px-4 py-5 position-relative mb-4">
                        <div class="service-box-content p-4">
                            <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                <i class="" data-feather="box"></i>
                            </div>
                            <h4 class="mb-3 font-size-22">Digital Design</h4>
                            <p class="text-muted mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis.</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-4">
                    <div class="service-box text-center px-4 py-5 position-relative mb-4 active">
                        <div class="service-box-content p-4">
                            <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                <i class="" data-feather="layers"></i>
                            </div>
                            <h4 class="mb-3 font-size-22">Awesome Support</h4>
                            <p class="text-muted mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                corporis suscipit.</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-4">
                    <div class="service-box text-center px-4 py-5 position-relative mb-4">
                        <div class="service-box-content p-4">
                            <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                <i class="" data-feather="server"></i>
                            </div>
                            <h4 class="mb-3 font-size-22">Easy to customize</h4>
                            <p class="text-muted mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                doloremque.</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

    </section>
    <!-- Services end -->

    <section class="section bg-gradient-primary">
        <div class="bg-overlay-img" style="background-image: url(images/demos.png);"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h1 class="text-white mb-4">Build your dream website today</h1>
                        <p class="text-white mb-5 font-size-16">Sed perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium totamrem aperiam eaque inventore veritatis
                            quasi.</p>
                        <a href="#" class="btn btn-lg btn-light">Ask for Demonstration</a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Cta end -->


    <!-- Team start -->
    <section class="section bg-light" id="team">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-7 text-center">
                    <h2 class="fw-bold">Our Team Members</h2>
                    <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque laudantium totam rem ab illo inventore.</p>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="images/team/1.jpg" alt="" class="img-fluid d-block mx-auto" />
                            <ul class="list-inline p-3 mb-0 team-social-item">
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm" data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm" data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm" data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <h5 class="font-size-19 mb-1">Frances Thompson</h5>
                            <p class="text-muted text-uppercase font-size-14 mb-0">Developer</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="images/team/2.jpg" alt="" class="img-fluid d-block mx-auto" />
                            <ul class="list-inline p-3 mb-0 team-social-item">
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm" data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm" data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm" data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <h5 class="font-size-19 mb-1">John Jones</h5>
                            <p class="text-muted text-uppercase font-size-14 mb-0">Ceo</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="images/team/3.jpg" alt="" class="img-fluid d-block mx-auto" />
                            <ul class="list-inline p-3 mb-0 team-social-item">
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm" data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm" data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm" data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <h5 class="font-size-19 mb-1">Della Hobbs</h5>
                            <p class="text-muted text-uppercase font-size-14 mb-0">Designer</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="images/team/4.jpg" alt="" class="img-fluid d-block mx-auto" />
                            <ul class="list-inline p-3 mb-0 team-social-item">
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm" data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm" data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm" data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <h5 class="font-size-19 mb-1">Troy Jordon</h5>
                            <p class="text-muted text-uppercase font-size-14 mb-0">Developer</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Team end -->

    <!-- Footer Start -->
    <footer class="footer" style="background-image: url(images/footer-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-4">
                        <a href="index.html"><img src="images/logo-light.png" alt="" class="" height="30" /></a>
                        <p class="text-white-50 my-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti.</p>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-7 ms-lg-auto">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="text-white font-size-18 mb-3">Customer</h4>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li><a href="javascript: void(0);" class="footer-link">Works</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Strategy</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Releases</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Press</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Mission</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="text-white font-size-18 mb-3">Product</h4>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li><a href="javascript: void(0);" class="footer-link">Trending</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Popular</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Customers</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Features</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="text-white font-size-18 mb-3">Information</h4>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li><a href="javascript: void(0);" class="footer-link">Developers</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Support</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Customer Service</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Get Started</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Guide</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="text-white font-size-18 mb-3">Support</h4>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li><a href="javascript: void(0);" class="footer-link">FAQ</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Contact</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Disscusion</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-5">
                        <p class="text-white-50 f-15 mb-0">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> ?? Qexal. Design By Themesbrand
                        </p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <!-- Footer End -->

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <!-- feather-icons js -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- App Js -->
    <script src="js/app.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

</body>

</html>