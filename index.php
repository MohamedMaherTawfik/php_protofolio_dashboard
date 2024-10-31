<?php include('db_connection.php') ?>
<!DOCTYPE html>
<html lang="" dir="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="Wafaa Hegazy">
    <!--Page Name-->
    <title>Not Crash | Home</title>
    <!--Page Icon-->
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon" />
    <!--Bootstrap with RTL-->
    <!-- <link rel="stylesheet" href="css/lib/bootstrap-rtl.min.css"> -->
    <!--Bootstrap with LTR-->
    <link rel="stylesheet" href="css/lib/bootstrap-ltr.min.css">
    <!--Css Files & Libraries-->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/lib/all.min.css">
    <link rel="stylesheet" href="css//lib/animate.css">
    <link rel="stylesheet" href="css/lib/jquery.fancybox.css">
    <link rel="stylesheet" href="css/lib/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <!--With LTR -->
    <!-- <link rel="stylesheet" href="css/style-en.css"> -->
</head>

<body>
    <!--Start header-->
    <header data-scroll-index="0">
        <!--Start navs-container -->
        <div class="navs-container">
            <!--Start main-nav-->
            <nav class="navbar navbar-expand-lg navbar-fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo-nav.png" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-scroll-nav="0">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="1">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="2">services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="3">portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php" >Dashboard</a>
                            </li>
                        </ul>
                        <a href="#" class="butn lang-btn">Ar</a>
                        <button type="button" class="butn contact-btn" data-toggle="modal"
                            data-target="#contactModal">Contact us</button>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <!--Start inner-header -->
            <?php
            $query_header = "SELECT * FROM `header`";
            $result_header = mysqli_query($connection, $query_header);
            $row = mysqli_fetch_assoc($result_header);
            ?>
            <div class="inner-header">
                <div class="row">
                    <div class="col-md-10 col-lg-7">
                        <div class="text-box ">
                            <div class="content wow text-focus-in ">
                                <p class="subtitle"><?php echo $row['subtitle'] ?></p>
                                <h1 class="title mt-3"><?php echo $row['title'] ?></h1>
                                <p class="p mt-3">
                                    <?php echo $row['description'] ?>
                                </p>
                                <div class="btns-wrapper mt-4">
                                    <a href="#" data-scroll-goto="1" class="main-btn">Explore</a>
                                    <a href="https://www.youtube.com/watch?v=HmZKgaHa3Fg" data-fancybox
                                        class="video-btn"><span class="icon"><i class="fas fa-play"></i></span> Watch
                                        video</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!--Start clients-sec -->
        <section class="clients-sec">
            <?php
            $query_clients = "SELECT * FROM `clients`";
            $result_clients = mysqli_query($connection, $query_clients);
            ?>
            <div class="container">
                <div class="swiper-container clients-swiper">
                    <div class="swiper-wrapper">
                        <?php
                        while ($row_clients = mysqli_fetch_assoc($result_clients)) {
                            ?>
                            <div class="swiper-slide">
                            <img src="images/<?php echo $row_clients['image'] ?>" alt="" class="partner-img wow zoomIn"
                                data-wow-duration="2s" />
                        </div>
                            <?php
                        }
                        
                        ?>
                        
                    </div>
                </div>
            </div>
        </section>
        <!--Start about-sec -->
        <?php 
        $query_about = "SELECT * FROM `about`";
        $result_about = mysqli_query($connection, $query_about);
        $row_about = mysqli_fetch_assoc($result_about);

        ?>
        <section class="about-sec" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-box">
                            <img src="images/<?php echo $row_about['image'] ?>" alt="" class="main-img wow fadeInRight"
                                data-wow-duration="2s" />
                            <img src="images/<?php echo $row_about['image'] ?>" alt="" class="card-img wow fadeInLeft"
                                data-wow-duration="2s" data-wow-delay=".5s" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-box wow text-focus-in" data-wow-duration="2s">
                            <div class="text-h">
                                <p class="subtitle"><?php echo $row_about['subtitle'] ?></p>
                                <h1 class="title mt-3"><?php echo $row_about['title'] ?></h1>
                            </div>
                            <p class="p mt-3 ">
                                <?php echo $row_about['description'] ?>
                            </p>
                            <a href="#" class="more-btn mt-4 d-block" data-toggle="modal"
                                data-target="#contentModal"><img src="images/icons/right-arrow.svg" alt=""
                                    class="icon" /> Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="images/pattern1.png" alt="" class="pattern wow fadeInRight" data-wow-duration="2s">
        </section>
        <!--Start about-goals -->
        <?php
        
        $query_goals = "SELECT * FROM `goals`";
        $result_goals = mysqli_query($connection, $query_goals);
        ?>
        <section class="about-goals">
            <div class="container">
                <div class="row">
                    <?php
                    while ($row_goals = mysqli_fetch_assoc($result_goals)) {
                        ?>
                        <div class="col-lg-4">
                        <div class="card wow swing-in-top-bck" data-wow-duration="1.5s">
                            <div class="content">
                                <span class="icon-t"><img src="images/" alt=""></span>
                                <h5 class="title mt-4"><?php echo $row_goals['title'] ?></h5>
                                <p class="p">
                                    <?php echo $row_goals['subtitle'] ?>
                                </p>
                                <!-- <a href="#" class="more-btn mt-4 d-block"><img src="images/icons/right-arrow.svg" alt="" class="icon"/> Learn more</a> -->
                            </div>
                        </div>
                    </div>
                        <?php 
                    }
                    
                    ?>
                    
                </div>
            </div>
        </section>
        <!--Start services-sec -->
        <?php

        $query_services = "SELECT * FROM `services`";
        $result_services = mysqli_query($connection, $query_services);
        ?>
        <section class="services-sec" data-scroll-index="2">
            <div class="container">
                <div class="text-center text-h mb-5 wow fadeInUp" data-wow-duration="2s">
                    <p class="subtitle">Our Services</p>
                    <h1 class="title mt-3">Enjoy more Services</h1>
                    <p class="p mt-3">The definition of business is an occupation</p>
                </div>
                <div class="row">
                    <?php
                    while ($row_services = mysqli_fetch_assoc($result_services)) {
                        ?>
                    <div class="col-md-4">
                        <div class="serv_card wow fadeInUp" data-wow-duration="2s">
                            <div class="content">
                                <img src="images/icons/service-1.svg" alt="" class="icon mb-4">
                                <h5 class="title"><?php echo $row_services['title'] ?></h5>
                                <p class="p">
                                    <?php echo $row_services['subtitle'] ?>
                                </p>
                                <a href="#" class="more-btn" data-toggle="modal" data-target="#contentModal">Learn More
                                    <img src="images/icons/right-arrow.svg" alt="" class="right-arrow-icon"></a>
                            </div>
                            <img src="images/pattern2.png" alt="" class="pattern">
                        </div>
                    </div>
                        <?php
                    }
                    
                    ?>
                    
                </div>
            </div>
        </section>
        <!--Start portfolio-sec -->
        <?php

        $query_latest = "SELECT * FROM `latest_work`";
        $result_latest = mysqli_query($connection, $query_latest);
        ?>
        <section class="portfolio-sec" data-scroll-index="3">
            <div class="container">
                <div class="text-center text-h mb-5 wow fadeInUp" data-wow-duration="2s">
                    <p class="subtitle">Our Portfolio</p>
                    <h1 class="title mt-3">Our Latest Work</h1>
                    <p class="p mt-3">The definition of business is an occupation</p>
                </div>
                <div class="tab-wrapper">
                    <div class="row">
                        <?php
                        while ($row_latest = mysqli_fetch_assoc($result_latest)) {
                            ?>
                        <div class="col-lg-3 col-md-6">
                            <a href="images/<?php echo $row_latest['image'] ?>" class="port_img" data-fancybox="images">
                                <img src="images/<?php echo $row_latest['image'] ?>" alt="" class="port_img sm" />
                            </a>
                        </div>
                            <?php
                        }
                        
                        ?>
                        
                    </div>
                </div>
            </div>
        </section>
        <!--Start partners-sec -->
        <?php 
        $query_partners = "SELECT * FROM `partners`";
        $result_partners = mysqli_query($connection, $query_partners);
        $row_partners = mysqli_fetch_assoc($result_partners);
        ?>
        <section class="partners-sec">
            <div class="container">
                <div class="text-center text-h mb-5 wow fadeInUp" data-wow-duration="2s">
                    <p class="subtitle">Our clients</p>
                    <h1 class="title mt-3">Our Partners</h1>
                    <p class="p mt-3">The definition of business is an occupation</p>
                </div>
                <div class="row">
                    <?php
                    while ($row_partners = mysqli_fetch_assoc($result_partners)) {
                        ?>
                        <div class="col-md-6 col-lg-3">
                        <img src="images/<?php echo $row_partners['image'] ?>" alt="" class="partner-img wow zoomIn" data-wow-duration="2s" />
                        </div>
                        <?php 
                    }
                    
                    ?>
                    
                </div>
            </div>
        </section>
        <!--Start contact-sec -->
        <?php 
        $query_contact = "SELECT * FROM `contact`";
        $result_contact = mysqli_query($connection, $query_contact);
        $row_contact = mysqli_fetch_assoc($result_contact);
        ?>
        <section class="contact-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-box wow text-focus-in">
                            <div class="text-h mb-4">
                                <p class="subtitle">contact</p>
                                <h1 class="title mt-3">Contact Us </h1>
                                <p class="p mt-3">Transport heavy products over long distances when speed is not an
                                    issue.</p>
                            </div>
                            <div class="links pt-2">
                                <a href="#"><img src="images/icons/contact-1.svg" alt="" class="icon" /><?php echo $row_contact['address']; ?></a>
                                <a href="#"><img src="images/icons/contact-2.svg" alt="" class="icon" /><?php echo $row_contact['phone']; ?></a>
                                <a href="#"><img src="images/icons/contact-3.svg" alt="" class="icon" /><?php echo $row_contact['email']; ?></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map">
                            <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <img src="images/line1.png" alt="" class="line">
        </section>
        <!--Start newsletter-sec -->
        <section class="newsletter-sec">
            <div class="inner wow fadeInUp" data-wow-duration="2s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-box">
                                <div class="text-h mb-4">
                                    <p class="subtitle">Subscribe</p>
                                    <h1 class="title mt-3">Get Started </h1>
                                    <p class="p mb-0 mt-3">Type your Email & subscribe to get the latest news directly
                                        to your inbox</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Type your mail">
                                    <button class="submit-btn">Get Started</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Content modal -->
        <div class="modal contentModal fade" id="contentModal" tabindex="-1" aria-labelledby="contentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contentModalLabel"> About Effective Strategy </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="text-h">
                            <p class="subtitle">about us</p>
                            <h1 class="title mt-3">Effective Strategy For Growth</h1>
                        </div>
                        <p class="p mt-3 mb-0">
                            The definition of business is an occupation or trade and the purchase and sale of products
                            or services to make a profit. An example of business is farming.
                            The definition of business is an occupation or trade and the purchase and sale of products
                            or services to make a profit. An example of business is farming.
                            The definition of business is an occupation or trade and the purchase and sale of products
                            or services to make a profit. An example of business is farming.
                        </p>
                        <p class="p mt-3 mb-0">
                            The definition of business is an occupation or trade and the purchase and sale of products
                            or services to make a profit. An example of business is farming.
                        </p>
                    </div>
                    <img src="images/pattern1.png" alt="" class="pattern">
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send a message </button>
                    </div> -->
                </div>
            </div>
        </div>
        <!--Conatact modal -->
        <div class="modal contactModal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalLabel"> Contact Us </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact_info">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="items">
                                        <div class="icons">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="info">
                                            <h3> 292 St. Jeddah,KSA</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="items">
                                        <div class="icons">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="info">
                                            <h3> Example@gmail.com</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="items">
                                        <div class="icons">
                                            <i class="fas fa-headset"></i>
                                        </div>
                                        <div class="info">
                                            <h3> +966 485 6789 012 </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-5">
                                <div class="map w-100">
                                    <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0"
                                        marginwidth="0"
                                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-container">
                                    <form>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Full name" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="You email" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Subject " />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5"
                                                placeholder="Your message "></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send a message </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--Start footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="content">
                        <img src="images/logo-white.svg" alt="" class="logo">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="content">
                        <h6 class="title">Menu</h6>
                        <div class="links">
                            <a href="#">About</a>
                            <a href="#">Pricing</a>
                            <a href="#">Blog</a>
                            <a href="#">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="content">
                        <h6 class="title">Services</h6>
                        <div class="links">
                            <a href="#">Web Design</a>
                            <a href="#">App Design</a>
                            <a href="#">Project Planing</a>
                            <a href="#">See All</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="content">
                        <h6 class="title">Get in touch</h6>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p class="p mb-0">Copyright © 2021not crash. All Rights Reserved.</p>
            </div>
        </div>
        <img src="images/pattern2.png" alt="" class="pattern" />
    </footer>
    <!--Scroll to top button-->
    <a data-scroll href="#" class="scroll-top-btn" id="scroll-btn"><img src="images/icons/top-arrow.png" alt=""></a>
    <!--Js Files & Libraries-->
    <script src="js/lib/jquery4.js"></script>
    <script src="js/lib/popper.js"></script>
    <script src="js/lib/bootstrap.js"></script>
    <script src="js/lib/smooth-scroll.min.js"></script>
    <script src="js/lib/jquery.fancybox.js"></script>
    <script src="js/lib/jquery.easing-1.3.pack.js"></script>
    <script src="js/lib/jquery.mousewheel-3.0.4.pack.js"></script>
    <script src="js/lib/swiper.js"></script>
    <script src="js/lib/wow.min.js"></script>
    <script src="js/lib/scollit.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(function () {
            $.scrollIt();
        });
    </script>
</body>

</html>