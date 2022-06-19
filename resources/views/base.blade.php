<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Archo onepage themeforest" />
    <meta name="description" content="Studio1 Creators" />
    <meta name="author" content="cybernetics.me" />

    <!-- Title  -->
    <title>Studio1 Creators</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ '/img/favicon.ico' }}" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ '/css/plugins.css' }}" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ '/css/style.css' }}" />

</head>

<body class="bg-dark">

    <!-- ==================== Start Loading ==================== -->

    <div id="preloader">
        <div class="loading-text">Studio1 Creators</div>
    </div>

    <!-- ==================== End Loading ==================== -->

    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->


    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar change navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="/">
                <img src="{{ '/img/logo-white-small-1.png' }}" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Our Services</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/services/interior/">Interior Design</a>
                            <a class="dropdown-item" href="/">Architectural Design</a>
                            <a class="dropdown-item" href="/">Landscape</a>
                            <a class="dropdown-item" href="/">Fitout Services</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Our Projects</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/">project 1</a>
                            <a class="dropdown-item" href="/">Project 2</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="social-icon">
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    <a href="#0"><i class="fab fa-behance"></i></a>
                </div>
                <div class="search">
                    <span class="icon pe-7s-search cursor-pointer"></span>
                    <div class="search-form text-center custom-font">
                        <form>
                            <input type="text" name="search" placeholder="Search">
                        </form>
                        <span class="close pe-7s-close cursor-pointer"></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->



    @yield("content")



    <!-- ==================== Start Footer ==================== -->

    <footer class="main-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="item abot">
                        <div class="logo-footer mb-20">
                            <a href="#0" class="logo">
                                <img src="img/logo-white-small-1.png" alt="">
                            </a>
                        </div>
                        <p>Our team takes over everything, from an idea and concept development to realization.</p>
                        <div class="social-icon">
                            <a href="#0"><i class="fab fa-facebook-f"></i></a>
                            <a href="#0"><i class="fab fa-twitter"></i></a>
                            <a href="#0"><i class="fab fa-behance"></i></a>
                            <a href="#0"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="item usful-links">
                        <div class="fothead">
                            <h6>Useful Links</h6>
                        </div>
                        <ul>
                            <li><i class="fas fa-chevron-right"></i> <a href="#0">Interior Design</a></li>
                            <li><i class="fas fa-chevron-right"></i> <a href="#0">Design Agency</a></li>
                            <li><i class="fas fa-chevron-right"></i> <a href="#0">Mattress Shop</a></li>
                            <li><i class="fas fa-chevron-right"></i> <a href="#0">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Call</h6>
                        </div>
                        <p>+7(111)123456789</p>
                        <p>+1(000)987654321</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Write</h6>
                        </div>
                        <p>contact@Archo.com</p>
                        <p>Username@website.com</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Visit</h6>
                        </div>
                        <p>B17 Princess Road, London, Greater London
                            NW18JR, United Kingdom</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="text-left">
                            <p>© {{ date('Y') }}, Studio1 Creators.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-right">
                            <p>All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ==================== End Footer ==================== -->






    <!-- jQuery -->
    <script src="{{ '/js/jquery-3.0.0.min.js' }}"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="{{ '/js/plugins.js' }}"></script>

    <!-- custom scripts -->
    <script src="{{ '/js/scripts.js' }}"></script>

    <!-- Map -->
    <script src="{{ '/js/map.js' }}"></script>

    <!-- google map api -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUU5FZiF5WLFFfgIC1n64Zr0zfpQZjBBg&callback=initMap">
        </script>

</body>

</html>