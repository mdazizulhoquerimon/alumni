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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/exe.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/hover.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/member.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/icofont.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/default.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/responsive.css" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/styles.css"/>
    <title>CUELSA</title>
</head>
<style>

.profile-teaser-left {
    float: left; width: 20%; margin-right: 1%;
}
.profile-img img {
    width: 100%; height: auto;
    border-radius:50%;
}

.profile-teaser-main {
    float: left; width: 79%;
}

.info { display: inline-block; margin-right: 10px; color: #777; }
.info span { font-weight: bold; }
</style>
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
                                        <span class="tex1t">+8801832751989</span>
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
                    <div class="row hidden-sm hidden-xs" style="text-align: center;">
                        <a href="<?= base_url();?>"><img  src="<?php echo base_url(); ?>static/images/logo.png" alt="logo"></a>
                        <a href="<?= base_url();?>"><h3 style="color: #1A265C">Chittagong University Ex-LAW Student Association</h3></a>
                    </div>
                </div>
            </div>

            <div class="header-middle">
                <div class="container">
                    <div class="menu">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="<?=base_url('common/about_us');?>">CUELSA</a></li>
                                      <li><a href="<?=base_url('common/contact');?>">CONTACT</a></li>
                                    </ul>
                                </li>
                                <li>
                                   <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ALUMNI CORNER<span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                      <li><a href="<?=base_url('users/login');?>" >ALUUMNI LOGIN</a></li>
                                      <li><a href="<?= base_url('users/profile');?>" >ALUMNI PROFILE</a></li>
                                      <li><a href="<?= base_url('users/register');?>" >ALUMNI REGISTER</a></li>
                                      <li><a href="<?=base_url('common/executive_member');?>" >EXECUTIVE MEMBER</a></li>
                                      <li><a href="<?=base_url('common/general_member');?>" >GENERAL MEMBER</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROGRAM &amp; EVENTS<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="<?=base_url('common/news');?>" >NEWS</a></li>
                                      <li><a href="<?=base_url('common/events');?>" >EVENTS</a></li>
                                      <li><a href="<?=base_url('common/notice');?>" >NOTICE</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="<?=base_url('common/career');?>" >CAREER OPPORTUNITY</a>
                                </li>


                                <li>
                                    <a href="<?=base_url('common/folder_gallery');?>">PHOTO GALLERY</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="area-mobile-content visible-sm visible-xs">
                        <div class="logo-mobile">
                            <a href="#"> <h5>CUELSA</h5></a>
                        </div>
                        <div class="mobile-menu ">
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!--End header wrapper-->

