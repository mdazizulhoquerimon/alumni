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
            <span class="logo-lg"><b>Cuelsa</b>ADMIN</span>
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
                    <a href="<?php echo base_url();?>dashboard">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
                    </a>
                </li>
                <?php if ($role == ROLE_ADMIN) : ?>
                <!-- News Section Strat -->
                <li data-toggle="collapse" data-target="#news" class="collapsed treeview">
                    <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span></a>
                </li>
                <li class="sub-menu collapse treeview" id="news">
                    <a href="#"><i class="fa fa-plus"></i> <span>Create News</span></a>
                    <a href="#"><i class="fa fa-eye"></i> <span>View All News</span></a>
                </li>
                <!-- News Section End -->
                <!-- Event Section Start -->
                <!-- General Event Section Strat -->
                <li data-toggle="collapse" data-target="#generalEvent" class="collapsed treeview">
                    <a href="#"><i class="fa fa-calendar"></i> <span>General Event</span></a>
                </li>
                <li class="sub-menu collapse treeview" id="generalEvent">
                    <a href="#"><i class="fa fa-plus-circle"></i> <span> Create General Event</span></a>
                    <a href="#"><i class="fa fa-eye"></i> <span>View All General Events</span></a>
                </li>
                <!-- General Event Section End -->
                <!-- Member Event Section Strat -->
                <li data-toggle="collapse" data-target="#memberEvent" class="collapsed treeview">
                    <a href="#"><i class="fa fa-calendar"></i> <span>Member Events</span></a>
                </li>
                <li class="sub-menu collapse treeview" id="memberEvent">
                    <a href="#"><i class="fa fa-plus-circle"></i> <span> Create Member Event</span></a>
                    <a href="#"><i class="fa fa-eye"></i> <span>View All Member Events</span></a>
                </li>
                <!-- Member Event Section End -->
                <!-- Event Section End -->
                <?php endif; ?>
                <?php if ($role == ROLE_ADMIN || $role == ROLE_MANAGER) : ?>
                    <!-- Member Section Strat -->
                    <!-- General Member Section Strat -->
                    <li data-toggle="collapse" data-target="#generalMember" class="collapsed treeview">
                        <a href="#"><i class="fa fa-user-circle"></i> <span>General Members</span></a>
                    </li>
                    <li class="sub-menu collapse treeview" id="generalMember">
                        <a href="#"><i class="fa fa-eye"></i> <span>View All General Members</span></a>
                    </li>
                    <!-- General Member Section End -->
                    <!-- Executive Member Section Strat -->
                    <li data-toggle="collapse" data-target="#executiveMember" class="collapsed treeview">
                        <a href="#"><i class="fa fa-user-circle"></i> <span>Executive Members</span></a>
                    </li>
                    <li class="sub-menu collapse treeview" id="executiveMember">
                        <a href="#"><i class="fa fa-plus-circle"></i> <span>Add Executive Member</span></a>
                        <a href="#"><i class="fa fa-eye"></i> <span>View All Executive Members</span></a>
                    </li>
                    <!-- Executive Member Section End -->
                    <!-- Member Section End -->
                <?php endif; ?>
                <?php if ($role == ROLE_ADMIN) : ?>
                    <!-- Batch Admin Section Strat -->
                    <li data-toggle="collapse" data-target="#bacthAdmin" class="collapsed treeview">
                        <a href="#"><i class="fa fa-users"></i> <span>Batch Admin</span></a>
                    </li>
                    <li class="sub-menu collapse treeview" id="bacthAdmin">
                        <a href="<?php echo base_url(); ?>user/addNew" > <i class="fa fa-plus-circle"></i> <span>Add Batch Admin</span></a>
                        <a href="<?php echo base_url(); ?>user/userListing" > <i class="fa fa-eye"></i> <span>View All Batch Admin</span></a>
                    </li>
                    <!-- Batch Admin Section End -->

                    <li class="treeview">
                        <a href="#"><i class="fa fa-upload"></i><span>Notice Uploads</span></a>
                    </li>

                <?php endif; ?>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>