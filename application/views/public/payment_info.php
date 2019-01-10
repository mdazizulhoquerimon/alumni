<?php include('header.php')?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/payment.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/profileview.css" />
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
                    <a href="#"><img class="img-circle img-responsive" alt="" src="<?php echo base_url().'/uploads/'.$fetched_user_data['imagename']; ?>"></a>
                    <h1><?php echo $fetched_user_data['fullname']; ?></h1>
                    <p><?php echo $fetched_user_data['designation']; ?></p>
                    <p><?php echo $fetched_user_data['companyname']; ?></p>
                    <div class="links-social">
                       <ul class="list-inline text-center">
                          <li><a href="<?php echo $fetched_user_data['twitterlink']; ?>"><i style="color: #f7ca18" class="fa fa-twitter" aria-hidden="true"></i></a></li>
                          <li><a href="<?php echo $fetched_user_data['instagramlink']; ?>"><i style="color: #f7ca18" class="fa fa-instagram" aria-hidden="true"></i></a></li>
                          <li><a href="<?php echo $fetched_user_data['facebooklink']; ?>"><i style="color: #f7ca18" class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      </ul>                                 
                    </div>
                  </div>
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="profile"><i class="fa fa-user"></i>Profile</a></li>
                    <li><a href="editprofile"><i class="fa fa-pencil-square-o"></i>Edit profile</a></li>
                    <li><a href="editcredentials"><i class="fa fa-lock"></i>Edit Login Credentials</a></li>
                    <li><a href="#"><i class="fa fa-inbox" aria-hidden="true"></i>Inbox</a></li>
                    <li class="active"><a href="paymentinfo"><i class="fa fa-usd" aria-hidden="true"></i>Payment History</a></li>
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
                             <h4 class="text-center" style="margin-bottom: 10px;">Payment Status</h4>
                             <section class="features_table">
        <div class="container ">
            <div class="col-sm-4 col-4 col-xs-5 no-padding">
                <div class="features-table">
                    <ul>
                        <h1>Month</h1>
                        <li>January</li>
                        <li>February</li>
                        <li>March</li>
                        <li>April</li>
                        <li>May</li>
                        <li>June</li>
                        <li>July</li>
                        <li>August</li>
                        <li>September</li>
                        <li>October</li>
                        <li>November</li>
                        <li>December</li>
                    </ul>
                </div>
            </div>
            
             <div class="col-sm-2 col-2 col-xs-9 no-padding">
                 <div class="features-table-paid">
                    <ul>
                        <h1>Status</h1>
                        <li><i class="fa fa-check"></i></li>
                        <li><i class="fa fa-times"></i></li>
                        <li><i class="fa fa-times"></i></li>
                        <li><i class="fa fa-times"></i></li>
                        <li><i class="fa fa-times"></i></li>
                        <li><i class="fa fa-times"></i></li>
                        <li><i class="fa fa-times"></i></li>
                        <li><i class="fa fa-times"></i></li>
                        <li><i class="fa fa-times"></i></li>
                        <li><i class="fa fa-times"></i></li>
                        <li><i class="fa fa-times"></i></li>
                        <li><i class="fa fa-times"></i></li>
                       
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
<?php include('footer.php');?>