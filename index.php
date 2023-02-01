<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>San Yu Aung</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.php">Portfolio</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#work">Work</a></li>
                    <li>
                        <a class="nav-link scrollto" href="#certificates">Certificate</a>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="hero-title mb-4">I am San Yu Aung</h1>
                    <p class="hero-subtitle"><span class="typed"
                            data-typed-items="Junior Php Developer (PHP-Laravel)"></span></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div><!-- End Hero Section -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about-mf route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="about-img">
                                                <img src="assets/img/testimonial-2.jpg"
                                                    class="img-fluid rounded b-shadow-a" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-7">
                                            <div class="about-info">
                                                <p>
                                                    <span class="title-s">Name: </span>
                                                    <span>San Yu Aung</span>
                                                </p>
                                                <p>
                                                    <span class="title-s">Profile: </span>
                                                    <span>Junior Php Developer</span><br>
                                                    <span>(Php - Laravel)</span>
                                                </p>
                                                <p>
                                                    <span class="title-s">Email: </span>
                                                    <a id="workdetail"
                                                        href="mailto:sanyuaung.ygn.mm@gmail.com"><span>sanyuaung.ygn.mm@gmail.com</span></a>
                                                </p>
                                                <p>
                                                    <span class="title-s">GitHUB: </span>
                                                    <a id="workdetail"
                                                        href="https://github.com/Sanyuaung"><span>https://github.com/Sanyuaung</span></a>
                                                </p>
                                                <p>
                                                    <span class="title-s">Phone: </span>
                                                    <a href="tel:+959788599188"><span>(+95) 9-788599188</span></a>
                                                </p>
                                                <p>
                                                    <a href="/images/SAN YU AUNG.pdf" download><span
                                                            class="title-s">Click download Resume ==>
                                                            <span class="bi bi-file-earmark-pdf"></span>
                                                        </span>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-mf">
                                        <p class="title-s">Skill</p>
                                        <span>English</span> <span class="pull-right">30%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 30%"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>HTML,CSS3</span> <span class="pull-right">70%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 70%"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>PHP</span> <span class="pull-right">80%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>JAVASCRIPT</span>
                                        <span class="pull-right">10%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 10%"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Laravel Framework</span>
                                        <span class="pull-right">90%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 90%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>MySQL Database</span>
                                        <span class="pull-right">70%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 70%"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>GitHUB</span>
                                        <span class="pull-right">80%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>A+ and Networking</span>
                                        <span class="pull-right">60%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 60%"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Adobe Photoshop</span>
                                        <span class="pull-right">50%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Hardworking,Teamwork and Motivating</span>
                                        <span class="pull-right">95%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 95%"
                                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Can learn the new technology from other or by
                                            myself</span>
                                        <span class="hide">95%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 95%"
                                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left">About Me</h5>
                                        </div>
                                        <p class="lead">
                                            &emsp;&emsp;My name is "San Yu Aung". I was born in 1997
                                            in Insein Township. I got a Matriculation Certificate in
                                            2013. And then I studied a Chemistry major at the Yangon
                                            University of Distance Education. I studied Computer
                                            Basic Course, Adobe Photoshop and Adobe Illustrator
                                            Course, A+ Hardware Course and Networking Course at that
                                            time and also I attended Certificate in Business
                                            Management at STI Myanmar University. Until 2016, I did
                                            the job at the mini Photo Studio with the Photo Editor
                                            position and my next job was at Mobile Sales and
                                            Services as a Salesman position. I did a job at Diamond
                                            Lake Hotel as a Receptionist of FO Department from 2016
                                            to 2018. I graduated in 2017.
                                        </p>
                                        <p class="lead">
                                            &emsp;&emsp;I did a job at Myanmar Oriental Bank with
                                            Junior Bank Assistant position from 12 June 2018 to 10
                                            Feb 2023. I made the web application portal for internal reports 
                                            and CBM reports (Using PHP, Laravel Framework and MySQL) 
                                            at Myanmar Oriental Bank. I studied an International Business
                                            Administration Course at the National Management
                                            Academy. I learned an online course of Php + MySQL Deep
                                            Diving Course and Php + Deep Dive Laravel Batch -2
                                            Course at Creative Coder Myanmar. More than 3 years of
                                            sub-study experience using PHP, Laravel Framework and
                                            MySQL and was implemented in my career. I continue to
                                            learn to develop and learn what I need for my career.
                                            Now I'm working at Global Wave Technology with PHP
                                            Developer position.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
        <!-- ======= working experiences Section ======= -->
        <section id="work" class="portfolio-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">Working Experiences</h3>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 card">
                        <div class="work-box">
                            <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                <div class="work-img card2">
                                    <img src="assets/img/work-1.jpg" alt="" class="img-fluid card2" />
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">
                                            Receptionist of Front Office Department
                                        </h2>
                                        <div class="w-more">
                                            <span class="w-date">[Dec 2016 – March 2018]</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="DL.html">
                                                <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="work-box">
                            <a href="assets/img/work-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                <div class="work-img card2">
                                    <img src="assets/img/work-2.jpg" alt="" class="img-fluid card2" />
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Junior Bank Assistant</h2>
                                        <br />
                                        <div class="w-more">
                                            <span class="w-date">[June 2018 – Feb 2023]</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="mob.html">
                                                <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="work-box">
                            <a href="assets/img/work-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                <div class="work-img card2">
                                    <img src="assets/img/work-3.jpg" alt="" class="img-fluid card2" />
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Php Developer</h2>
                                        <br />
                                        <div class="w-more">
                                            <span class="w-date">[Feb 2023 – Present]</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="GlobalWave.html">
                                                <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->
        <!-- ======= certificates Section ======= -->
        <section id="certificates" class="services-mf pt-5 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">Certificates</h3>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 card">
                        <div class="work-box">
                            <a href="assets/img/Matriculation-Certificate.jpg" data-gallery="portfolioGallery"
                                class="certificates-lightbox">
                                <div class="work-img card2">
                                    <img src="assets/img/Matriculation-Certificate.jpg" alt=""
                                        class="img-fluid card2" />
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h2 class="w-title">Matriculation Certificate</h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="w-like">
                                            <span class="bi bi-mortarboard"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="work-box">
                            <a href="assets/img/Graduate.jpg" data-gallery="portfolioGallery"
                                class="certificates-lightbox">
                                <div class="work-img card2">
                                    <img src="assets/img/Graduate.jpg" alt="" class="img-fluid card2" />
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h2 class="w-title">Degree Certificate</h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="w-like">
                                            <span class="bi bi-mortarboard"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="work-box">
                            <a href="assets/img/Basic.jpg" data-gallery="portfolioGallery"
                                class="certificates-lightbox">
                                <div class="work-img card2">
                                    <img src="assets/img/Basic.jpg" alt="" class="img-fluid card2" />
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h2 class="w-title">Computer Basic</h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="w-like">
                                            <span class="bi bi-mortarboard"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="work-box">
                            <a href="assets/img/KMD.jpg" data-gallery="portfolioGallery" class="certificates-lightbox">
                                <div class="work-img card2">
                                    <img src="assets/img/KMD.jpg" alt="" class="img-fluid card2" />
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h2 class="w-title">Adobe Photoshop</h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="w-like">
                                            <span class="bi bi-mortarboard"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="work-box">
                            <a href="assets/img/STI.jpg" data-gallery="portfolioGallery" class="certificates-lightbox">
                                <div class="work-img card2">
                                    <img src="assets/img/STI.jpg" alt="" class="img-fluid card2" />
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h2 class="w-title">
                                            Certificate in Business Management
                                        </h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="w-like">
                                            <span class="bi bi-mortarboard"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="work-box">
                            <a href="assets/img/A.jpg" data-gallery="portfolioGallery" class="certificates-lightbox">
                                <div class="work-img card2">
                                    <img src="assets/img/A.jpg" alt="" class="img-fluid card2" />
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h2 class="w-title">A+ Hardware Course</h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="w-like">
                                            <span class="bi bi-mortarboard"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="work-box">
                            <a href="assets/img/Network.jpg" data-gallery="portfolioGallery"
                                class="certificates-lightbox">
                                <div class="work-img card2">
                                    <img src="assets/img/Network.jpg" alt="" class="img-fluid card2" />
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h2 class="w-title">Networking Course</h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="w-like">
                                            <span class="bi bi-mortarboard"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="work-box">
                            <a href="assets/img/CIBA.jpg" data-gallery="portfolioGallery" class="certificates-lightbox">
                                <div class="work-img card2">
                                    <img src="assets/img/CIBA.jpg" alt="" class="img-fluid card2" />
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h2 class="w-title">
                                            Certificate of Achievement
                                        </h2>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="w-like">
                                            <span class="bi bi-mortarboard"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="work-box">
                            <a href="assets/img/DIBA.jpg" data-gallery="portfolioGallery" class="certificates-lightbox">
                                <div class="work-img card2">
                                    <img src="assets/img/DIBA.jpg" alt="" class="img-fluid card2" />
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h2 class="w-title">
                                            Diploma in International Business Management
                                        </h2>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="w-like">
                                            <span class="bi bi-mortarboard"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="work-box">
                            <a href="assets/img/Creative.jpg" data-gallery="portfolioGallery"
                                class="certificates-lightbox">
                                <div class="work-img card2">
                                    <img src="assets/img/Creative.jpg" alt="" class="img-fluid card2" />
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h2 class="w-title">Creative Coder Myanmar (Online Course)</h2>
                                        <div class="w-more">
                                            <span class="w-date">Php + MySQL Deep Diving Course</span>
                                            <br />
                                            <span class="w-date">Php + Deep Dive Laravel Batch -2</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="w-like">
                                            <span class="bi bi-mortarboard"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End certificates Section -->

        <!-- ======= Contact Section ======= -->
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                <?php if(isset($_SESSION['success'])) : ?>
                                    <div class="col-md-12 text-center alert alert-success alert-dismissible fade show" role="alert">
                                        <?php echo ($_SESSION['success']); unset($_SESSION['success']);?>
                                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif ?>
                                    <div class="title-box-2">
                                        <h5 class="title-left">Contact Me</h5>
                                    </div>
                                    <div>
                                        <form action="mailsend.php" method="post">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name"
                                                            placeholder="Your Name" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            placeholder="Your Email" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                            id="subject" placeholder="Subject" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <button id='button' name="contact_btn" type="submit"
                                                        class="button button-a button-big button-rouded">
                                                        Send Message
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">Get in Touch</h5>
                                    </div>
                                    <div class="more-info">
                                        <ul class="list-ico">
                                            <li>
                                                <span class="bi bi-geo-alt"></span> 966, Ayetheikdi Kyaung St,East
                                                Ywar
                                                Ma Qtr, Insein Tws, Yangon
                                            </li>
                                            <li>
                                                <span class="bi bi-phone"></span>
                                                <a href="tel:+959788599188"><span>(+95) 9-788599188</span></a>
                                            </li>
                                            <li>
                                                <span class="bi bi-envelope"></span>
                                                <a id="contact"
                                                    href="mailto:sanyuaung.ygn.mm@gmail.com"><span>sanyuaung.ygn.mm@gmail.com</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/profile.php?id=100010599582437"><span
                                                        class="ico-circle"><i class="bi bi-facebook"></i></span></a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/sanyuaung.ygn.mm/"><span
                                                        class="ico-circle"><i class="bi bi-instagram"></i></span></a>
                                            </li>
                                            <li>
                                                <a href="https://join.skype.com/invite/mb2hbOTPgTN2"><span
                                                        class="ico-circle"><i class="bi bi-skype"></i></span></a>
                                            </li>
                                            <li>
                                                <a href="https://t.me/San_Yu_Aung"><span class="ico-circle"><i
                                                            class="bi bi-telegram"></i></span></a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/in/SanYuAung"><span
                                                        class="ico-circle"><i class="bi bi-linkedin"></i></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portfolio-description">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.0453699270984!2d96.10165261411376!3d16.900341421118753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19512e945b461%3A0xcfb157a6a36cc50e!2sSan%20Yu%20Aung!5e1!3m2!1sen!2smm!4v1674974641769!5m2!1sen!2smm"
                                            width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer 
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">
                &copy; Copyright <strong>DevFolio</strong>. All Rights Reserved
              </p>
              <div class="credits">
                Designed by
                <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>