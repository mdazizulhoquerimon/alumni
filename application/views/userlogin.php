<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
   <link rel="icon" href="favicon.ico" type="image/ico" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="<?php echo base_url(); ?>static/js/libs/modernizr.custom.js"></script>
    <title> Login Page </title>
</head>
<body>
<div class="main-wrapper page">
    <!--Begin header ưrapper-->
    <div class="header-wrapper">
        <header id="header" class="container-header type1">
            <div class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="top-left col-sm-6 hidden-xs">
                            <ul class="list-inline">
                                <li>
                                    <a href="mailto:alumni@sayidan.edu">
                                        <span class="icon mail-icon"></span>
                                        <span class="text">alumni@sayidan.edu</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon phone-icon"></span>
                                        <span class="text">+1 087 222 9</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="top-right col-sm-6 col-xs-12">
                            <ul class="list-inline">
                                <li class="top-search">
                                    <form class="navbar-form search no-margin no-padding">
                                        <input type="text" name="q" class="form-control input-search" placeholder="search..." autocomplete="off">
                                        <button type="submit" class="lnr lnr-magnifier"></button>
                                    </form>
                                </li>
                                <li class="login">
                                    <a href="./login-page.html">Log In</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="logo hidden-sm hidden-xs">
                        <a href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>static/images/logo.jpg" alt="logo"></a>
                    </div>
                    <div class="menu">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="./about-us.html">ABOUT US</a>
                                </li>
                                <li>
                                    <a href="./programs-events.html">PROGRAM &amp; EVENTS</a>
                                </li>

                                <li>
                                   <a href="./alumni-story.html">ALUMNI STORY</a>
                                </li>
                                <li>
                                    <a href="./career-opportunity.html">CAREER OPPORTUNITY</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="area-mobile-content visible-sm visible-xs">
                        <div class="logo-mobile">
                            <a href="/"> <img src="<?php echo base_url(); ?>static/images/logo-small.png" alt="logo"></a>
                        </div>
                        <div class="mobile-menu ">
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!--End header wrapper-->

    <!--Begin content wrapper-->
    <div class="content-wrapper">
        <div class="account-page login text-center">
            <div class="container">
                <div class="account-title">
                    <h4 class="heading-light">LOG IN INTO ALUMNI DASHBOARD</h4>
                </div>
                <div class="account-content">
                    <form action="#">
                        <div class="input-box email">
                            <input type="text" placeholder="Email Address">
                        </div>
                        <div class="input-box password">
                            <input type="text" placeholder="Password">
                        </div>
                        <div class="buttons-set">
                            <a href="./access-denied.html"  title="Log In" class="bnt bnt-theme text-regular text-uppercase">Log In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End content wrapper-->
    <!--Begin footer wrapper-->
    <div class="footer-wrapper type2">
        <footer class="foooter-container">
            <div class="container">
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12 animated footer-col">
                            <div class="contact-footer">
                                <div class="logo-footer">
                                    <a href="./homepage-1.html"><img src="<?php echo base_url(); ?>static/images/logo.jpg" alt=""></a>
                                </div>
                                <div class="contact-desc">
                                    <p class="text-light">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare.</p>
                                </div>
                                <div class="contact-phone-email">
                                    <span class="contact-phone"><a href="#">+10872229</a> | <a href="#">+10872228 </a> </span>
                                    <span class="contact-email"><a href="#">alumni@sayidan.edu</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12  col-xs-12 animated footer-col">
                            <div class="links-footer">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <h6 class="heading-bold">DASHBOARD</h6>
                                        <ul class="list-unstyled no-margin">
                                            <li><a href="./register-page.html">REGISTER</a></li>
                                            <li><a href="./career-opportunity.html">CAREER</a></li>
                                            <li><a href="./alumni-story.html">STORY</a></li>
                                            <li><a href="./alumni-directory.html">DIRECTORY</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-sm-4 col-xs-12">
                                        <h6 class="heading-bold">ABOUT US</h6>
                                        <ul class="list-unstyled no-margin">
                                            <li><a href="./event-single.html">EVENTS</a></li>
                                            <li><a href="./galery.html">GALLERY</a></li>
                                            <li><a href="./homepage-1.html">HOMEPAGE V1</a></li>
                                            <li><a href="./homepage-2.html">HOMEPAGE V2</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-sm-4 col-xs-12">
                                        <h6 class="heading-bold">SUPPORT</h6>
                                        <ul class="list-unstyled no-margin">
                                            <li><a href="./job-detail.html">FAQ</a></li>
                                            <li><a href="./about-us.html#contacts">CONTACT US</a></li>
                                            <li><a href="./blog.html">ORGANIZER</a></li>
                                            <li><a href="./blog-single-fullwith.html">SOCIAL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 animated footer-col">
                            <div class="links-social">
                                <div class="login-dashboard">
                                    <a href="./login-page.html" class="bg-color-theme text-center text-regular">Login Dashboard</a>
                                </div>
                                <ul class="list-inline text-center">
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom text-center">
                    <p class="copyright text-light">©2016 Alumni Association of the University of Sayidan</p>
                </div>
            </div>
        </footer>
    </div>
    <!--End footer wrapper-->
</div>

<script src="<?php echo base_url(); ?>static/js/libs/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/jquery.meanmenu.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/parallax.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/custom/main.js"></script>
</body>
</html>