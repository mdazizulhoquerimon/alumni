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
                            <div class="user-heading" style="background-color:  #1a265c">
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
                                <li class="active"><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                                <li><a href="editprofile"><i class="fa fa-pencil-square-o"></i>Edit profile</a></li>
                                <li><a href="editcredentials"><i class="fa fa-lock"></i>Edit Login Credentials</a></li>
                                <li><a href="#"><i class="fa fa-inbox" aria-hidden="true"></i>Inbox</a></li>
                                <li><a href="paymentinfo"><i class="fa fa-usd" aria-hidden="true"></i>Payment
                                        History</a></li>
                                <li><a href="logout"><i class="fa fa-sign-out"></i>Logout</a></li>
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
                                        <h4 class="text-center" style="margin-bottom: 10px;">Basic Information</h4>
                                        <table class="table table-user-information">
                                            <tbody>
                                            <tr>
                                                <td>Batch:</td>
                                                <td><?php echo $fetched_user_data['batch']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Student ID:</td>
                                                <td><?php echo $fetched_user_data['studentid']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Date of Birth</td>
                                                <td><?php echo $fetched_user_data['dateofbirth']; ?></td>
                                            </tr>
                                            <tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td><?php echo $fetched_user_data['gender']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td><?php echo $fetched_user_data['address']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    <a href="mailto:<?php echo $fetched_user_data['email']; ?>"><?php echo $fetched_user_data['email']; ?></a>
                                                </td>
                                            </tr>
                                            <td>Phone Number</td>
                                            <td><?php echo $fetched_user_data['phone']; ?><br><br>
                                            </td>

                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <h4 class="text-center" style="margin-bottom: 10px;">Something
                                about <?php echo $fetched_user_data['fullname']; ?></h4>
                            <p>
                                <?php echo $fetched_user_data['aboutuser']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>