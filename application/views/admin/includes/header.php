<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"
          rel="stylesheet" type="text/css"/>
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Ionicons 2.0.0 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css"/>
    <style>
        .error {
            color: red;
            font-weight: normal;
        }
    </style>
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>dashboard" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>CUELSA</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Cuelsa</b>Admin</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-history"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"> Last Login : <i
                                        class="fa fa-clock-o"></i> <?= empty($last_login) ? "First Time Login" : $last_login; ?>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image"
                                 alt="User Image"/>
                            <span class="hidden-xs"><?php echo $name; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">

                                <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle"
                                     alt="User Image"/>
                                <p>
                                    <?php echo $name; ?>
                                    <small><?php echo $role_text; ?></small>
                                </p>

                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo base_url(); ?>profile" class="btn btn-warning btn-flat"><i
                                                class="fa fa-user-circle"></i> Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i
                                                class="fa fa-sign-out"></i> Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="<?php echo base_url(); ?>dashboard">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
                    </a>
                </li>
                <?php if ($role == ROLE_ADMIN) : ?>
                    <!-- Batch Admin Section Strat -->
                    <li data-toggle="collapse" data-target="#bacthAdmin" class="collapsed treeview">
                        <a href="#"><i class="fa fa-users"></i> <span>Batch Admin</span><span class="caret"></span></a>
                    </li>
                    <li class="sub-menu collapse treeview" id="bacthAdmin">
                        <a href="<?php echo base_url(); ?>addNew"> <i class="fa fa-plus-circle"></i> <span>Add Batch Admin</span></a>
                        <a href="<?php echo base_url(); ?>userListing"> <i class="fa fa-eye"></i> <span>View All Batch Admin</span></a>
                    </li>
                    <!-- Batch Admin Section End -->
                    <!-- News Section Strat -->
                    <li data-toggle="collapse" data-target="#news" class="collapsed treeview">
                        <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span><span class="caret"></span></a>
                    </li>
                    <li class="sub-menu collapse treeview" id="news">
                        <a href="<?php echo base_url(); ?>news/addNews"><i class="fa fa-plus"></i>
                            <span>Create News</span></a>
                        <a href="<?php echo base_url(); ?>news/newsListing"><i class="fa fa-eye"></i> <span>View All News</span></a>
                    </li>
                    <!-- News Section End -->
                    <!-- Event Section Start -->
                    <!-- General Event Section Strat -->
                    <li data-toggle="collapse" data-target="#generalEvent" class="collapsed treeview">
                        <a href="#"><i class="fa fa-calendar"></i> <span>Events</span><span class="caret"></span></a>
                    </li>
                    <li class="sub-menu collapse treeview" id="generalEvent">
                        <a href="<?php echo base_url(); ?>event/addEvent"><i class="fa fa-plus-circle"></i> <span> Create Event</span></a>
                        <a href="<?php echo base_url(); ?>event/eventListing"><i class="fa fa-eye"></i> <span>View All Events</span></a>
                    </li>
                    <!-- General Event Section End -->
                    <!-- Event Section End -->
                <?php endif; ?>
                <?php if ($role == ROLE_ADMIN || $role == ROLE_MANAGER) : ?>
                    <!-- Member Section Strat -->
                    <!-- General Member Section Strat -->
                    <li data-toggle="collapse" data-target="#generalMember" class="collapsed treeview">
                        <a href="#"><i class="fa fa-user-circle"></i> <span>General Members</span><span
                                    class="caret"></span></a>
                    </li>
                    <li class="sub-menu collapse treeview" id="generalMember">
                        <a href="<?php echo base_url(); ?>member/memberListing"><i class="fa fa-eye"></i> <span>View All General Members</span></a>
                    </li>
                    <!-- General Member Section End -->
                    <!-- Executive Member Section Strat -->
                    <li data-toggle="collapse" data-target="#executiveMember" class="collapsed treeview">
                        <a href="#"><i class="fa fa-user-circle"></i> <span>Executive Members</span><span
                                    class="caret"></span></a>
                    </li>
                    <li class="sub-menu collapse treeview" id="executiveMember">
                        <a href="<?php echo base_url(); ?>member/addExecutiveMember"><i class="fa fa-plus-circle"></i>
                            <span>Add Executive Member</span></a>
                        <a href="<?php echo base_url(); ?>member/executiveMemberListing"><i class="fa fa-eye"></i>
                            <span>View All Executive Members</span></a>
                    </li>
                    <!-- Executive Member Section End -->
                    <!-- Member Section End -->
                    <!-- Photo Section Strat -->
                    <li data-toggle="collapse" data-target="#photo_gallery" class="collapsed treeview">
                        <a href="#"><i class="fa fa-image"></i> <span>Photo Gallery</span><span
                                    class="caret"></span></a>
                    </li>
                    <li class="sub-menu collapse treeview" id="photo_gallery">
                        <a href="<?php echo base_url(); ?>photo_gallery/uploadPhoto"> <i class="fa fa-plus-circle"></i>
                            <span>Upload Photo</span></a>
                        <a href="<?php echo base_url(); ?>photo_gallery/folderListing"> <i class="fa fa-eye"></i>
                            <span>View All Photo</span></a>
                    </li>
                    <!-- Photo Section End -->
                <?php endif; ?>
                <?php if ($role == ROLE_ADMIN) : ?>
                    <!-- Notice Section Strat -->
                    <li data-toggle="collapse" data-target="#notice" class="collapsed treeview">
                        <a href="#"><i class="fa fa-upload"></i> <span>Notice</span><span class="caret"></span></a>
                    </li>
                    <li class="sub-menu collapse treeview" id="notice">
                        <a href="<?php echo base_url(); ?>notice/uploadNotice"> <i class="fa fa-plus-circle"></i> <span>Upload Notice</span></a>
                        <a href="<?php echo base_url(); ?>notice/noticeListing"> <i class="fa fa-eye"></i> <span>View All Notice</span></a>
                    </li>
                    <!-- Notice Section End -->

                <?php endif; ?>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>