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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="<?php echo base_url(); ?>static/js/libs/modernizr.custom.js"></script>
    <title>CUELSA</title>
</head>
<body>
<div class="main-wrapper">
    <!--Begin header ưrapper-->
    <div class="header-wrapper header-position">
        <header id="header" class="container-header type1">
            <div class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="top-left col-sm-6 hidden-xs">
                            <ul class="list-inline">
                                <li>
                                    <a href="mailto:alumni@cuelsa.com">
                                        <span class="icon mail-icon"></span>
                                        <span class="text">alumni@cuelsa.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon phone-icon"></span>
                                        <span class="tex1t">+88018.........</span>
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
                                    <a href="login/userlogin">Log In</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="logo hidden-sm hidden-xs">
                        <a href="#"> <img src="<?php echo base_url(); ?>static/images/logo.jpg" alt="logo"></a>
                    </div>
                    <div class="menu">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="./about-us.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">CUELSA</a></li>
                                      <li><a href="#">CONTACT</a></li>                                      
                                    </ul>
                                </li>
                                <li>
                                   <a href="./alumni-story.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ALUMNI CORNER<span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                      <li><a href="#">ALUUMNI LOGIN</a></li>
                                      <li><a href="#">ALUMNI PROFILE</a></li>
                                      <li><a href="#">ALUMNI REGISTER</a></li>
                                      <li><a href="#">ALUMNI STORIES</a></li>
                                      <li><a href="#">EXECUTIVE MEMBER</a></li>
                                      <li><a href="#">GENERAL MEMBER</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="./programs-events.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROGRAM &amp; EVENTS<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">NEWS</a></li>
                                      <li><a href="#">EVENTS</a></li>
                                      <li><a href="#">NOTICE</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="./galery.html">PHOTO GALLERY</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="area-mobile-content visible-sm visible-xs">
                        <div class="logo-mobile">
                            <a href="#"> <img src="<?php echo base_url(); ?>static/images/logo-small.png" alt="logo"></a>
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
        <!--begin slider-->
        <div class="slider-hero">
            <div class="sliders-wrap columns1">
                <div class="item">
                    <img src="<?php echo base_url(); ?>static/images/slider2.jpg" alt="">
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2 class="text-center">
                                    <span class="text-bold">Hearty Welcomes with </span> <br />
                                    <span class="text-white">a Touch of Rivalry</span>
                                </h2>
                                <a href="#" class="bnt bnt-theme read-story">READ STORY</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>static/images/slider1.jpg" alt="">
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2>
                                    <span class="text-bold">SAYIDAN professor explores</span> <br />
                                    <span class="text-white">marine biology with teens</span>
                                </h2>
                                <a href="#" class="bnt bnt-theme read-story">READ ARTICLE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>static/images/slider2.jpg" alt="">
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2>
                                    <span class="text-bold">Hearty Welcomes with </span> <br />
                                    <span class="text-white">a Touch of Rivalry</span>
                                </h2>
                                <a href="#" class="bnt bnt-theme read-story">READ STORY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end slider-->

        <!--begin upcoming event-->
        <div class="upcoming-event">
            <div class="container">
                <div class="row">
                    <div class="area-img col-md-5 col-sm-12 col-xs-12">
                        <img class="img-responsive animated zoomIn" src="<?php echo base_url(); ?>static/images/even-img.jpg" alt="">
                    </div>
                    <div class="area-content col-md-7 col-sm-12 col-xs-12">
                        <div class="area-top">
                            <div class="row">
                                <div class="col-sm-10 col-xs-9">
                                    <h5 class="heading-light no-margin animated fadeInRight">UPCOMING EVENT</h5>
                                    <h2 class="heading-bold animated fadeInLeft">ANNUAL MEET UP AND SCHOLARSHIP PRESENTATIONS</h2>
                                    <span>
                                        <span class="icon map-icon"></span>
                                        <span class="text-place text-light animated fadeInRight">Sayidan Street, Gondomanan, 8993, San Francisco, CA</span>
                                    </span>
                                </div>
                                <div class="col-sm-2 col-xs-3">
                                    <div class="area-calendar calendar animated slideInRight">
                                        <span class="day text-bold">29</span>
                                        <span class="month text-light">APRIL</span>
                                        <span class="year text-light bg-year">2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="area-bottom">
                            <div id="time" class="pull-left animated slideInLeft"></div>
                            <a href="#" class="bnt bnt-theme join-now pull-right animated fadeIn">Join Now</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--end upcoming event-->

        <!--begin alumni dashboard-->
        <div class="alumni-dashboard">
            <div class="container">
                <div class="title title-dashboard type1">
                    <h3 class="heading-light no-margin"> My Sayidan Alumni Dashboard </h3>
                </div>
                <div class="area-content">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="icon mail-icon"></div>
                            <div class="box-content">
                                <h4 class="heading-regular"> Checking Message </h4>
                                <p class="text-content text-margin text-light ">
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="icon account-icon"></div>
                            <div class="box-content">
                                <h4 class="heading-regular"> Update My Information </h4>
                                <p class="text-content text-margin text-light">
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="icon group-icon"></div>
                            <div class="box-content">
                                <h4 class="heading-regular"> Join with Alumni Forum </h4>
                                <p class="text-content text-margin text-light">
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="icon search-icon"></div>
                            <div class="box-content">
                                <h4 class="heading-regular"> Search Alumni Directory </h4>
                                <p class="text-content text-margin text-light">
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam.
                                </p>
                            </div>
                        </div>
                        <div class="login-dashboard text-center col-sm-12 col-xs-12">
                            <a href="./login-page.html" class="bnt bnt-theme login-links">LOG IN TO ALUMNI DASHBOARD</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end alumni dashboard-->

        <!--begin block links-->
        <div class="block-links">
            <div class="container">
                <div class="row">
                    <div class="block-news col-md-6 col-sm-12 col-xs-12">
                        <div class="column-news">
                            <div class="title-links">
                                <h3 class="heading-regular">Latest News</h3>
                            </div>
                            <div class="post-wrapper">
                                <div class="post-item clearfix ">
                                    <div class="image-frame post-photo-wrapper">
                                        <a href="#"> <img src="<?php echo base_url(); ?>static/images/new-img1.jpg" alt=""></a>
                                    </div>
                                    <div class="post-desc-wrapper">
                                        <div class="post-desc">
                                            <div class="post-title"><h6 class="heading-regular"><a href="#">New Sayidan "Start-Up" in Distrupt 2016</a></h6></div>
                                            <div class="post-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item clearfix ">
                                    <div class="image-frame post-photo-wrapper">
                                        <a href="#"> <img src="<?php echo base_url(); ?>static/images/new-img2.jpg" alt=""></a>
                                    </div>
                                    <div class="post-desc-wrapper">
                                        <div class="post-desc">
                                            <div class="post-title"><h6 class="heading-regular"><a href="#">Sayidan Library Gives Alumni New Access</a></h6></div>
                                            <div class="post-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item clearfix ">
                                    <div class="image-frame post-photo-wrapper">
                                        <a href="#"> <img src="<?php echo base_url(); ?>static/images/new-img3.jpg" alt=""></a>
                                    </div>
                                    <div class="post-desc-wrapper">
                                        <div class="post-desc">
                                            <div class="post-title"><h6 class="heading-regular"><a href="#">Alumni Service Spotlight: Larry Traimor AB '82</a></h6></div>
                                            <div class="post-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item clearfix ">
                                <div class="image-frame post-photo-wrapper">
                                    <a href="#"> <img src="<?php echo base_url(); ?>static/images/new-img4.jpg" alt=""></a>
                                </div>
                                <div class="post-desc-wrapper">
                                    <div class="post-desc">
                                        <div class="post-title"><h6 class="heading-regular"><a href="#">Sayidan in Silicon Valley: Family and Finance</a></h6></div>
                                        <div class="post-excerpt">
                                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="view-all"><a href="./blog.html">View All News</a></div>
                        </div>
                    </div>
                    <!--
                    <div class="block-career col-md-4 col-sm-12 col-xs-12">
                        <div class="column-career">
                            <div class="title-links">
                                <h3 class="heading-regular">Career Opportunity</h3>
                            </div>
                            <div class="career-content">
                                <div class="company-item clearfix">
                                    <div class="company-logo">
                                        <img src="images/company-logo1.png" alt="">
                                    </div>
                                    <div class="company-desc-wrapper">
                                        <div class="company-desc">
                                            <div class="company-title"><h6 class="heading-regular"><a href="#">Creative Director at StartTrek Inc</a></h6></div>
                                            <div class="company-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-item clearfix">
                                    <div class="company-logo">
                                        <img src="images/company-logo2.png" alt="">
                                    </div>
                                    <div class="company-desc-wrapper">
                                        <div class="company-desc">
                                            <div class="company-title"><h6 class="heading-regular"><a href="#">Chief Technologies Officer at Microtek Inc</a></h6></div>
                                            <div class="company-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-item clearfix">
                                    <div class="company-logo">
                                        <img src="images/company-logo3.png" alt="">
                                    </div>
                                    <div class="company-desc-wrapper">
                                        <div class="company-desc">
                                            <div class="company-title"><h6 class="heading-regular"><a href="#">Senior UI/UX Manager at Kidos Inc</a></h6></div>
                                            <div class="company-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-item clearfix">
                                    <div class="company-logo">
                                        <img src="images/company-logo4.png" alt="">
                                    </div>
                                    <div class="company-desc-wrapper">
                                        <div class="company-desc">
                                            <div class="company-title"><h6 class="heading-regular"><a href="#">Finance Officer at  Atomic Inc</a></h6></div>
                                            <div class="company-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all"><a href="./career-opportunity.html">View All Career Opportunity</a></div>
                        </div>
                    </div>
                    end carrer opportunity block-->

                    <div class="block-event-calendar col-md-6 col-sm-12 col-xs-12">
                        <div class="column-calendar">
                            <div class="title-links">
                                <h3 class="heading-regular">Event Calendar</h3>
                            </div>
                            <div class="content-calendar bg-calendar no-padding">
                                <div class="top-section">
                                    <h6 class="heading-light">April 2016</h6>
                                    <span class="icon calendar-icon pull-right"></span>
                                </div>
                                <div class="list-view">
                                    <div class="view-item">
                                        <div class="date-item">
                                            <span class="dates text-light">SAT</span>
                                            <span class="day text-bold color-theme">07</span>
                                            <span class="month text-light">APR</span>
                                        </div>
                                        <div class="date-desc-wrapper">
                                            <div class="date-desc">
                                                <div class="date-title"><h6 class="heading-regular">Club Sponsorship 2015-2016</h6></div>
                                                <div class="date-excerpt">
                                                    <p>Organizer: Sayidan Black Alumni Association</p>
                                                </div>
                                                <div class="place">
                                                    <span class="icon map-icon"></span>
                                                    <span class="text-place">Gondomanan Street 209, California</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view-item">
                                        <div class="date-item">
                                            <span class="dates text-light">MON</span>
                                            <span class="day text-bold color-theme">09</span>
                                            <span class="month text-light">APR</span>
                                        </div>
                                        <div class="date-desc-wrapper">
                                            <div class="date-desc">
                                                <div class="date-title"><h6 class="heading-regular">Weekend at Sayidan Sierra Camp</h6></div>
                                                <div class="date-excerpt">
                                                    <p>Organizer: Sayidan Black Alumni Association</p>
                                                </div>
                                                <div class="place">
                                                    <span class="icon map-icon"></span>
                                                    <span class="text-place">Gondomanan Street 209, California</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view-item">
                                        <div class="date-item">
                                            <span class="dates text-light">TUE</span>
                                            <span class="day text-bold color-theme">10</span>
                                            <span class="month text-light">APR</span>
                                        </div>
                                        <div class="date-desc-wrapper">
                                            <div class="date-desc">
                                                <div class="date-title"><h6 class="heading-regular">Gondomanan Street 209, California</h6></div>
                                                <div class="date-excerpt">
                                                    <p>Organizer: Sayidan Black Alumni Association</p>
                                                </div>
                                                <div class="place">
                                                    <span class="icon map-icon"></span>
                                                    <span class="text-place">Gondomanan Street 209, California</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view-item">
                                        <div class="date-item">
                                            <span class="dates text-light">THU</span>
                                            <span class="day text-bold color-theme">12</span>
                                            <span class="month text-light">APR</span>
                                        </div>
                                        <div class="date-desc-wrapper">
                                            <div class="date-desc">
                                                <div class="date-title"><h6 class="heading-regular">Annual Meeting and Luncheon</h6></div>
                                                <div class="date-excerpt">
                                                    <p>Organizer: Sayidan Black Alumni Association</p>
                                                </div>
                                                <div class="place">
                                                    <span class="icon map-icon"></span>
                                                    <span class="text-place">Gondomanan Street 209, California</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view-item">
                                        <div class="date-item">
                                            <span class="dates text-light">SAT</span>
                                            <span class="day text-bold color-theme">14</span>
                                            <span class="month text-light">APR</span>
                                        </div>
                                        <div class="date-desc-wrapper">
                                            <div class="date-desc">
                                                <div class="date-title"><h6 class="heading-regular">Food Sort at Second Food Bank</h6></div>
                                                <div class="date-excerpt">
                                                    <p>Organizer: Sayidan Black Alumni Association</p>
                                                </div>
                                                <div class="place">
                                                    <span class="icon map-icon"></span>
                                                    <span class="text-place">Gondomanan Street 209, California</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all"><a href="./programs-events.html">View All Events</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end block links-->

        <!--begin alumni interview-->
        <div class="alumni-interview">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                        <div class="interview-wrapper">
                            <div class="interview-title">
                                <h4 class="heading-light text-capitalize">Alumni Interview</h4>
                                <h1 class="heading-light text-capitalize">Hannah Jordan</h1>
                            </div>
                            <div class="interview-desc text-left">
                                <p class="text-light">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                            </div>
                            <div class="interview-see-story">
                                <a href="./story-single.html" class="see-story bnt text-uppercase">SEE HANNAH STORY</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end alumni interview-->

        <!--begin twitter stream-->
        <div class="twitter-stream">
            <div class="container">
                <div class="twitter-wrapper text-center">
                    <div class="twitter-icon color-theme">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </div>
                    <div class="twitter-content">
                        <div class="twitter-desc">
                            <p class="text-light text-center">“I feel fortunate to be joining my classmates in welcoming the Class of
                                2016 to the Sayidan alumni community <a href="#">@SayidanEdu</a> <a href="#">@SayidanEdu</a>“</p>
                            <div class="twitter-user">
                                <span class="avatar-user"><img src="<?php echo base_url(); ?>static/images/avatar.png" alt=""></span>
                                <span class="name">@KathleenLittle</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end twitter stream-->

        <!--begin instagream-->
        <div class="instagream">
            <div class="instagram-feed clearfix">
                <h2 style="text-align: center;margin-bottom: 20px;">Photo Gallery</h2>
                <ul class="list-item no-margin">
                    <li class="no-padding no-margin no-style" style="width: 12%"><a href="#"><img  src="<?php echo base_url(); ?>static/images/ins-img1.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 19%"><a href="#"><img  src="<?php echo base_url(); ?>static/images/ins-img2.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 19%"><a href="#"><img  src="<?php echo base_url(); ?>static/images/ins-img3.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 19%"><a href="#"><img  src="<?php echo base_url(); ?>static/images/ins-img4.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 19%"><a href="#"><img  src="<?php echo base_url(); ?>static/images/ins-img5.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 12%"><a href="#"><img  src="<?php echo base_url(); ?>static/images/ins-img6.jpg" alt=""></a></li>
                </ul>
                <div class="instagram-feed-user text-center">
                    <div class="user-wrapper">
                        <span class="icon-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                        <span class="name-user">@CUELSA</span>
                    </div>
                </div>
            </div>
        </div>
        <!--end instagream-->

        <!--begin newsletter
        <div class="newsletter newsletter-parallax">
           <div class="container">
               <div class="newsletter-wrapper text-center">
                   <div class="newsletter-title">
                       <h2 class="heading-light">Keep Up and Join Our Newsletter</h2>
                       <p class="text-white">Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                   </div>
                   <form name="subscribe-form" target="_blank" class="form-inline">
                       <input type="text" class="form-control text-center form-text-light" name="EMAIL" value="" placeholder="E-mail Address" >
                       <button type="submit" class="button bnt-theme">subscribe</button>
                   </form>
               </div>
           </div>
        </div>
        end newsletter-->

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
                                        <h6 class="heading-bold">USEFULL LINK</h6>
                                        <ul class="list-unstyled no-margin">
                                            <li><a href="http://www.supremecourt.gov.bd">SUPREME COURT BANGLADESH</a></li>
                                            <li><a href="http://cu.ac.bd">UNIVERSITY OF CHITTAGONG</a></li>
                                            <li><a href="http://www.culaw.ac.bd">LAW,CU</a></li>
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
                    <p class="copyright text-light">©2018 Chittagong University Ex-LAW Student Association</p>
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
<script src="<?php echo base_url(); ?>static/js/libs/jquery.meanmenu.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/jquery.syotimer.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/parallax.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/custom/main.js"></script>
<script>
    jQuery(document).ready(function () {
        $('#time').syotimer({
            year: 2018,
            month: 12,
            day: 23,
            hour: 7,
            minute: 7,
        });
    });
</script>
</body>
</html>