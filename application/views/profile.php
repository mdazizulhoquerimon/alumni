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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/dashboard.css" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="<?php echo base_url(); ?>static/js/libs/modernizr.custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>   
    <title> Profile | User </title>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300);
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100);
        body,
        html,
        .wrapper {
        height: 100%;
        width: 100%;
        }
        body {
        font-family: 'Open Sans', sans-serif;
        color: #404040;
        }
        .wrapper {
        background: -webkit-gradient(linear, left bottom, right top, color-stop(0, #62075c), color-stop(1, #c30eb8));
        background: -webkit-linear-gradient(left bottom, #62075c 0, #c30eb8 100%);
        background: -moz-linear-gradient(left bottom, #62075c 0, #c30eb8 100%);
        background: -o-linear-gradient(left bottom, #62075c 0, #c30eb8 100%);
        background: -ms-linear-gradient(left bottom, #62075c 0, #c30eb8 100%);
        background: linear-gradient(left bottom, #62075c 0, #c30eb8 100%);
        position: relative;
        z-index: 1;
        }
        .wrapper:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-image: url("http://remtsoy.com/experiments/user_card/img/food.png");
        z-index: 2;
        opacity: 0.3;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
        filter: alpha(opacity=30);
        }
        .wrapper-inner {
        position: relative;
        z-index: 3;
        height: 100%;
        }
        .box-wrapper {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        margin-top: 40px;
        z-index: 1;
        }
        .box {
        position: relative;
        -webkit-border-radius: 8px;
        border-radius: 8px;
        -webkit-box-shadow: 0 4px 1px rgba(0,0,0,0.1);
        box-shadow: 0 4px 1px rgba(0,0,0,0.1);
        width: 380px;
        background: #fff;
        text-align: center;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding-top: 65px;
        }
        .box-inner {
        padding: 30px;
        }
        .avatar {
        -webkit-border-radius: 50%;
        border-radius: 50%;
        -webkit-box-shadow: 0 0 0 3px #c30eb8 , 0 0 0 8px #fff;
        box-shadow: 0 0 0 3px #c30eb8 , 0 0 0 8px #fff;
        top: -75px;
        margin-left: -75px;
        left: 50%;
        position: absolute;
        }
        .avatar img {
        width: 150px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        display: block;
        }
        h1,
        h2,
        h3,
        h4,
        h5 {
        font-family: 'Open Sans', sans-serif;
        font-weight: 300;
        margin-top: 0;
        margin-bottom: 15px;
        }
        .name,
        .followers-title {
        font-size: 38px;
        font-weight: 100;
        font-family: 'Roboto', sans-serif;
        margin-bottom: 2px;
        color: #3a3a3a;
        }
        .occupation {
        font-size: 18px;
        font-style: italic;
        color: #707070;
        margin-bottom: 2px;
        }
        .location {
        color: #b3b3b3;
        font-size: 14px;
        margin-top: 5px;
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #f2f2f2;
        }
        .location .fa {
        color: #c6c6c6;
        margin-right: 4px;
        }

        .sidebar{
            will-change: min-height;
        }

        .sidebar__inner{
            transform: translate(0, 0); /* For browsers don't support translate3d. */
            transform: translate3d(0, 0, 0);
            will-change: position, transform;
        }
    </style>

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
                <div class="main-content">
                    <div class="sidebar">
                        <div class="sidebar__inner">
                        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Edit Acccount Info
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Payment Status
            </a>
          </li>
        </ul>
    </div>
</div>
<br>
<br>
<br>
<br>
                <div class="content">
                    <div class="wrapper">
                            <div class="wrapper-inner">
                                <div class="box-wrapper">
                                    <div class="box">
                                        <div class="avatar">
                                            <img src="http://remtsoy.com/experiments/user_card/img/avatar.jpg">
                                        </div>
                                        <div class="box-inner">
                                            <h3 class="name">Christina W. Turner</h3>
                                            <h4 class="occupation">interaction designer</h4>
                                            <p class="location"><i class="fa fa-map-marker"></i>Austin, Texas</p>
                                            <h4 style="position:left">ID: xxxxxxx</h4>
                                            <h4 class="occupation">Demo Text: </h4>
                                            <h4 class="occupation">Demo Text: </h4>
                                            <h4 class="occupation">Demo Text: </h4>
                                            <h4 class="occupation">Demo Text: </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
<script src="<?php echo base_url(); ?>static/js/custom/dashboard.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/custom/sticky-sidebar.js"></script>

<script type="text/javascript">
  var sidebar = new StickySidebar('.sidebar', {
    topSpacing: 50,
    bottomSpacing: 20,
    containerSelector: '.main-content',
    innerWrapperSelector: '.sidebar__inner',
    minWidth:300
  });
</script>
</body>
</html>