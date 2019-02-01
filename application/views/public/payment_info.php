<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/payment.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/profileview.css"/>
<div class="content-wrapper">
    <div class="account-page login">
        <div class="container">
            <div class="account-title">
                <h4 class="heading-light text-center">PROFILE</h4>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="profile-block">
                        <div class="panel text-center">
                            <div class="user-heading">
                                <a href="#"><img class="img-circle img-responsive" alt=""
                                                 src="<?php echo base_url() . '/uploads/' . $fetched_user_data['imagename']; ?>"></a>
                                <h1><?php echo $fetched_user_data['fullname']; ?></h1>
                                <p><?php echo $fetched_user_data['designation']; ?></p>
                                <p><?php echo $fetched_user_data['companyname']; ?></p>
                                <div class="links-social">
                                    <ul class="list-inline text-center">
                                        <li><a href="<?php echo $fetched_user_data['twitterlink']; ?>"><i
                                                        style="color: #f7ca18" class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $fetched_user_data['instagramlink']; ?>"><i
                                                        style="color: #f7ca18" class="fa fa-instagram"
                                                        aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $fetched_user_data['facebooklink']; ?>"><i
                                                        style="color: #f7ca18" class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo base_url(); ?>users/profile"><i
                                                class="fa fa-user"></i>Profile</a></li>
                                <li><a href="<?php echo base_url(); ?>users/editprofile"><i
                                                class="fa fa-pencil-square-o"></i>Edit profile</a></li>
                                <li><a href="<?php echo base_url(); ?>users/editcredentials"><i class="fa fa-lock"></i>Edit
                                        Login Credentials</a></li>
                                <li><a href="#"><i class="fa fa-inbox" aria-hidden="true"></i>Inbox</a></li>
                                <li class="active"><a href="paymentinfo"><i class="fa fa-usd" aria-hidden="true"></i>Payment
                                        History</a></li>
                                <li><a href="<?php echo base_url(); ?>users/logout"><i class="fa fa-sign-out"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <!-- resumt -->
                    <div class="panel panel-default">
                        <div class="panel-heading resume-heading">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-xs-12">
                                        <h4 class="text-center" style="margin-bottom: 10px;">Payment Status</h4>
                                        <section class="features_table">
                                            <div class="container ">
                                                <div class="col-sm-4 col-4 col-xs-5 no-padding">
                                                    <div class="features-table">
                                                        <ul>
                                                            <h1>Month</h1>
                                                            <li onclick="location.href = '<?php echo base_url(); ?>users/monthlypayment?month=january';">
                                                                January
                                                            </li>
                                                            <li onclick="location.href = '<?php echo base_url(); ?>users/monthlypayment?month=february';">
                                                                February
                                                            </li>
                                                            <li onclick="location.href = '<?php echo base_url(); ?>users/monthlypayment?month=march';">
                                                                March
                                                            </li>
                                                            <li onclick="location.href = '<?php echo base_url(); ?>users/monthlypayment?month=april';">
                                                                April
                                                            </li>
                                                            <li onclick="location.href = '<?php echo base_url(); ?>users/monthlypayment?month=may';">
                                                                May
                                                            </li>
                                                            <li onclick="location.href = '<?php echo base_url(); ?>users/monthlypayment?month=june';">
                                                                June
                                                            </li>
                                                            <li onclick="location.href = '<?php echo base_url(); ?>users/monthlypayment?month=july';">
                                                                July
                                                            </li>
                                                            <li onclick="location.href = '<?php echo base_url(); ?>users/monthlypayment?month=august';">
                                                                August
                                                            </li>
                                                            <li onclick="location.href = '<?php echo base_url(); ?>users/monthlypayment?month=september';">
                                                                September
                                                            </li>
                                                            <li onclick="location.href = '<?php echo base_url(); ?>users/monthlypayment?month=october';">
                                                                October
                                                            </li>
                                                            <li onclick="location.href = '<?php echo base_url(); ?>users/monthlypayment?month=november';">
                                                                November
                                                            </li>
                                                            <li onclick="location.href = '<?php echo base_url(); ?>users/monthlypayment?month=december';">
                                                                December
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-sm-2 col-2 col-xs-9 no-padding">
                                                    <div class="features-table-paid">
                                                        <ul>
                                                            <h1>Status</h1>
                                                            <li>
                                                                <i class="fa <?php echo $fetched_user_data['january']; ?>"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fa <?php echo $fetched_user_data['february']; ?>"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fa <?php echo $fetched_user_data['march']; ?>"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fa <?php echo $fetched_user_data['april']; ?>"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fa <?php echo $fetched_user_data['may']; ?>"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fa <?php echo $fetched_user_data['june']; ?>"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fa <?php echo $fetched_user_data['july']; ?>"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fa <?php echo $fetched_user_data['august']; ?>"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fa <?php echo $fetched_user_data['september']; ?>"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fa <?php echo $fetched_user_data['october']; ?>"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fa <?php echo $fetched_user_data['november']; ?>"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fa <?php echo $fetched_user_data['december']; ?>"></i>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </section>
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