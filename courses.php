<?php

	require_once 'connection.php';
	$req = "SELECT * FROM cours";
	$cours = $conn ->query($req);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Eduaid Responsive Html5 Template</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Start Header -->
    <header>
        <div class="header_top_area my-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_top d-flex justify-content-between">
                            <div class="site_logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt="logo"
                                        class="img-fluid" /></a>
                            </div>
                            <div class="site_info d-flex justify-content-between">
                                <div class="single_info">
                                    <img src="assets/images/location.png" alt="Location" class="img-fluid" />
                                    <div class="info_data">
                                        <h6>Location</h6>
                                        <p>1010 New York, NY 10018 US</p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <img src="assets/images/phone.png" alt="Location" class="img-fluid" />
                                    <div class="info_data">
                                        <h6>Phone</h6>
                                        <p>+880 2456 547</p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <button class="special-button" onclick="window.location.href = 'apply_form.html';">
                                        Apply Now <i class="fa fa-angle-right"></i>
                                        <span class="button_icon"><i class="far fa-file-alt"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area bg_dark_mobile">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-menu default_bg">
                            <nav class="navbar navbar-expand-lg">
                                <div class="mobile_site_logo d-none">
                                    <a href="index.html"><img src="assets/images/footer_logo.png" alt="logo"
                                            class="img-fluid" /></a>
                                </div>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Home
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="index.html">Home - University</a>
                                                <a class="dropdown-item" href="index-2.html">Home - Modern
                                                    University</a>
                                                <a class="dropdown-item" href="index-3.html">Home - Online Courses</a>
                                                <a class="dropdown-item" href="index-4.html">Home - Kindergarten</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.html">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="courses.html">Courses</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-bs-toggle="dropdown">
                                                Pages
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li>
                                                    <a class="dropdown-item" href="departments.html">Departments</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#" id="blogDropdown1"
                                                        role="button" data-bs-toggle="dropdown">
                                                        Blog
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="blogDropdown1">
                                                        <li>
                                                            <a class="dropdown-item" href="blog_01.html">Blog 1</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="blog_02.html">Blog 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog_details.html">Blog Details</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="teachers.html">Teachers</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="teacher_details.html">Teacher
                                                        Details</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="events.html">Events</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="gallery.html">Gallery</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="students.html" class="nav-link" id="blod_pages">
                                                Students
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="result.html" class="nav-link">Result</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="notice.html" class="nav-link">Notice</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact.html" class="nav-link">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#search_modal" data-bs-toggle="modal"
                                                data-bs-target="#search_modal" class="nav-link"><i
                                                    class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                    <div class="collapse-bar">
                                        <a class="navbar-brand" data-bs-toggle="collapse" href="#languages_options"><i
                                                class="fa fa-bars"></i></a>
                                        <div class="option-menu collapse" id="languages_options">
                                            <nav>
                                                <ul>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">English</a>
                                                        <a class="nav-link" href="#">Bangla</a>
                                                        <a class="nav-link" href="#">Hindi</a>
                                                        <a class="nav-link" href="#">Spanish</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <!-- Start Search Modal -->
            <div class="modal fade" id="search_modal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title sm-sub-title">Search Here</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" class="form-control" placeholder="Search Here" />
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="search-results">
                                <h5 class="my-4 sm-sub-title">10 Search Results Found</h5>
                                <div class="theme-list">
                                    <ul>
                                        <li>
                                            <a href="#">Smply dummy text of the printing and typesetting
                                                industry</a>
                                        </li>
                                        <li>
                                            <a href="#">Mauris at varius orci. Vestibulum um felis eu nisl
                                                pulvinar</a>
                                        </li>
                                        <li><a href="#">Welcome To Our Campus For Learn</a></li>
                                        <li>
                                            <a href="#">The point of using Lorem Ipsum is that it has a
                                                more-or-less
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">has a more-or-less normal distribution of letters, as
                                                opposed to using.</a>
                                        </li>
                                        <li>
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit.
                                            </a>
                                        </li>
                                        <li><a href="#">Build Education Website Using WP</a></li>
                                        <li>
                                            <a href="#">Build Education Website Using WordPress </a>
                                        </li>
                                        <li><a href="#">And Other Modern Technology</a></li>
                                        <li>
                                            <a href="#">assumenda est. Our friendly support team is
                                                standing.</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button_one" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Modal -->
        </div>
    </header>
    <!-- End Header -->



    <!-- Start Hero Area -->
    <section class="hero-section height-470" style="background-image: url(assets/images/about_us.png)"
        data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-hrader text-white text-center">
                            <h1 class="display-2">Our Courses</h1>
                            <div class="page-breadcrumb">
                                <p>
                                    <a class="text-white" href="index.html">Home</a> - Our
                                    Courses
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->



    <!-- Start Featured Section -->
    <section class="featured-section-3 section-ptb-3" data-aos="fade-up">
        <div class="featured-area-wrapper show_navigation_2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <div class="section-title-2">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Pellentesque quis eros lobortis, vestibulum turpis ac,
                                pulvinar odio. Praesent vulputate a elit ac mollis. In sit
                                amet ipsum turpis. Pellentesque venenatis, libero vel euismod
                                lobortis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mx-auto text-center mb-5">
                        <div class="portfolios-list-2">
                            <ul>
                                <li class="active button_four filter-button" data-filter="all">
                                    All Projects
                                </li>
                                <li class="button_four filter-button" data-filter="design">
                                    Web Design
                                </li>
                                <li class="button_four filter-button" data-filter="ui_design">
                                    UI Design
                                </li>
                                <li class="button_four filter-button" data-filter="business">
                                    Business
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        while($row = mysqli_fetch_assoc($cours)){
                    ?>
                    <div class="col-lg-4 col-md-6 filter business">
                        <div class="single-featured-5 bg-white text-center">
                            <div class="feature-image">
                                <img src="<?php echo $row["logoCours"];?>" alt="Featured" class="img-fluid" />
                            </div>
                            <div class="featured-text-and-info border-6">
                                <div class="feature-content p-4">
                                    <h3><a href="<?php echo $row["fichierCours"];?>"><?php echo $row["nomCours"];?></a></h3>
                                    <p>
                                        Mauris at varius orci. Vestibulum um felis eu nisl
                                        pulvinar, quis ultricies nibh. Sed ultricies ante vitae.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php        
                        }
                    ?>    
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Section -->



    <!-- Start Footer -->
    <footer data-aos="fade-up">
        <div class="subscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="subscribe-wrapper p-5 bg-white">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="subscribe-text">
                                        <h2>Newsletters</h2>
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempoe</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="subscribe-form">
                                        <form action="#">
                                            <input type="email" class="form-control"
                                                placeholder="Enter Your Email Here" />
                                            <button type="submit">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area default_bg">
            <div class="footer-top section-ptb-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single_widget">
                                <div class="address-widget">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/images/footer_logo.png" alt=""
                                                class="img-fluid" /></a>
                                    </div>
                                    <p>
                                        900 Lucerne Station Road Terrace, Orlando, FL 32806, USA
                                        contact@eduaid.com
                                    </p>
                                    <span>+892 5555 444</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3d-5">
                            <div class="single_widget">
                                <h3>Useful Links</h3>
                                <div class="widget-list">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Our Instructors</a></li>
                                        <li><a href="#">Courses</a></li>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Service Plus</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-xs-5">
                            <div class="single_widget">
                                <h3>Our Services</h3>
                                <div class="widget-list">
                                    <ul>
                                        <li><a href="#">CSE Engeering</a></li>
                                        <li><a href="#">Graduation</a></li>
                                        <li><a href="#">Courses</a></li>
                                        <li><a href="#">Admission</a></li>
                                        <li><a href="#">Internation</a></li>
                                        <li><a href="#">Faqs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single_widget">
                                <h3>Latest News</h3>
                                <div class="widget-item">
                                    <div class="widget-image">
                                        <a href="#"><img src="assets/images/blog_01.jpg" alt="blog one" /></a>
                                    </div>
                                    <div class="widget-content">
                                        <h5>
                                            <a href="#">7 Step Social Media Marke ting Strategy</a>
                                        </h5>
                                        <div class="widget-meta">
                                            <span>05 Jan 2019</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-item">
                                    <div class="widget-image">
                                        <a href="#"><img src="assets/images/blog_02.jpg" alt="blog one" /></a>
                                    </div>
                                    <div class="widget-content">
                                        <h5>
                                            <a href="#">7 Step Social Media Marke ting Strategy</a>
                                        </h5>
                                        <div class="widget-meta">
                                            <span>05 Jan 2019</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-wrapper border-top py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-bottom">
                                <div class="copyright-text">
                                    <p>Eduaid 2019. All Rights Reserved.</p>
                                </div>
                                <div class="social-accounts">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    
    <div class="scroll-top">
        <div class="scroll-icon">
            <i class="fa fa-angle-up"></i>
        </div>
    </div>



    <script src="assets/js/jquery-3.4.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/bootnavbar.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>