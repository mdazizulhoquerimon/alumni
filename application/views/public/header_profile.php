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
        margin-top: 180px;
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



/* Profile container */
.profile {
  margin: 0 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 0px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}


a, button, code, div, img, input, label, li, p, pre, select, span, svg, table, td, textarea, th, ul {
    -webkit-border-radius: 0!important;
    -moz-border-radius: 0!important;
    border-radius: 0!important;
}
.dashboard-stat, .portlet {
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
}
.portlet {
    margin-top: 0;
    margin-bottom: 25px;
    padding: 0;
    border-radius: 4px;
}
.portlet.bordered {
    border-left: 2px solid #e6e9ec!important;
}
.portlet.light {
    padding: 12px 20px 15px;
    background-color: #fff;
}
.portlet.light.bordered {
    border: 1px solid #e7ecf1!important;
}
.list-separated {
    margin-top: 10px;
    margin-bottom: 15px;
}
.profile-stat {
    padding-bottom: 20px;
    border-bottom: 1px solid #f0f4f7;
}
.profile-stat-title {
    color: #7f90a4;
    font-size: 25px;
    text-align: center;
}
.uppercase {
    text-transform: uppercase!important;
}

.profile-stat-text {
    color: #5b9bd1;
    font-size: 10px;
    font-weight: 600;
    text-align: center;
}
.profile-desc-title {
    color: #7f90a4;
    font-size: 17px;
    font-weight: 600;
}
.profile-desc-text {
    color: #7e8c9e;
    font-size: 14px;
}
.margin-top-20 {
    margin-top: 20px!important;
}
[class*=" fa-"]:not(.fa-stack), [class*=" glyphicon-"], [class*=" icon-"], [class^=fa-]:not(.fa-stack), [class^=glyphicon-], [class^=icon-] {
    display: inline-block;
    line-height: 14px;
    -webkit-font-smoothing: antialiased;
}
.profile-desc-link i {
    width: 22px;
    font-size: 19px;
    color: #abb6c4;
    margin-right: 5px;
}

        .sidebar{
            will-change: min-height;
        }

        .sidebar__inner{
            transform: translate(0, 0); /* For browsers don't support translate3d. */
            transform: translate3d(0, 0, 0);
            will-change: position, transform;
        }






        body{
    padding-top: 68px;
    padding-bottom: 50px;
}
        .image-container {
            position: relative;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .image-container:hover .image {
            opacity: 0.3;
        }

        .image-container:hover .middle {
            opacity: 1;
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