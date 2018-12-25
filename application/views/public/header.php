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
                        <a href="<?= base_url();?>"> <img src="<?php echo base_url(); ?>static/images/logo.jpg" alt="logo"></a>
                    </div>
                    <div class="menu">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="<?=base_url('common/about_us');?>">CUELSA</a></li>
                                      <li><a href="<?=base_url('common/about_us');?>">CONTACT</a></li>
                                    </ul>
                                </li>
                                <li>
                                   <a href="./alumni-story.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ALUMNI CORNER<span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                      <li><a href="<?=base_url('login/userlogin');?>">ALUUMNI LOGIN</a></li>
                                      <li><a href="#">ALUMNI PROFILE</a></li>
                                      <li><a href="<?= base_url('register/alumniregister');?>">ALUMNI REGISTER</a></li>
                                      <li><a href="#">EXECUTIVE MEMBER</a></li>
                                      <li><a href="<?=base_url('common/general_member');?>">GENERAL MEMBER</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="./programs-events.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROGRAM &amp; EVENTS<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="<?=base_url('common/news');?>">NEWS</a></li>
                                      <li><a href="<?=base_url('common/events');?>">EVENTS</a></li>
                                      <li><a href="#">NOTICE</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="<?=base_url('common/gallery');?>">PHOTO GALLERY</a>
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
