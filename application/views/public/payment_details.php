<?php include('header.php')?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/payment.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/profileview.css" />
<div class="content-wrapper">
  <div class="account-page login">
      <div class="container">
          <div class="account-title">
              <h4 class="heading-light text-center">Monthly Payment Details</h4>
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
                  <li><a href="<?php echo base_url(); ?>users/profile"><i class="fa fa-user"></i>Profile</a></li>
                  <li><a href="<?php echo base_url(); ?>users/editprofile"><i class="fa fa-pencil-square-o"></i>Edit profile</a></li>
                  <li><a href="<?php echo base_url(); ?>users/editcredentials"><i class="fa fa-lock"></i>Edit Login Credentials</a></li>
                  <li><a href="#"><i class="fa fa-inbox" aria-hidden="true"></i>Inbox</a></li>
                  <li class="active"><a href="paymentinfo"><i class="fa fa-usd" aria-hidden="true"></i>Payment History</a></li>
                  <li><a href="<?php echo base_url(); ?>users/logout"><i class="fa fa-sign-out"></i>Logout</a></li>
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
                             <h4 class="text-center" style="margin-bottom: 10px;">Payment Details</h4><hr>
                             <section class="features_table">
        <div class="container ">
            <div class="col-sm-4 col-4 col-xs-5 no-padding">

        <?php if($fetched_user_data['isPaid'] == '0') { ?>
            <div id="startpayment" class="startpayment">
                <div class="alert alert-danger"> <b>You haven't paid this month's payment <br> Please pay the payment below <b></div>
                <h2>Please fill out the form below to make your monthly payment</h2><hr>
                <form method="post" action="<?php echo base_url(); ?>payment/requestssl">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="fname" required class="tbox" autofocus placeholder="Name" value="<?php echo $fetched_user_data['fullname']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" required class="tbox" placeholder="Email" value="<?php echo $fetched_user_data['email']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td><input type="text" name="phone" required class="tbox" placeholder="Phone" value="<?php echo $fetched_user_data['phone']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Amount(BDT)</td>
                            <td><input type="text" name="amount" required value="50" class="tbox" placeholder="Amount"></td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td><input type="text" name="country" required class="tbox" placeholder="Country" value="Bangladesh"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input type="text" name="address" required class="tbox" placeholder="Address" value="<?php echo $fetched_user_data['address']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Street Address</td>
                            <td><input type="text" name="street" required class="tbox" placeholder="Street Address" value=""></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td><input type="text" name="state" required class="tbox" placeholder="State" value=""></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><input type="text" name="city" required class="tbox" placeholder="City" value=""></td>
                        </tr>
                        <tr>
                            <td>Post Code</td>
                            <td><input type="text" name="postcode" required class="tbox" placeholder="Post Code" value=""></td>
                        </tr>
                    </table>
                    <input type="hidden" id="monthname" name="monthname" value="<?php echo $fetched_user_data['monthname']; ?>">
                    <br><input type="submit" name="submit" value="Make Payment" class="btn btn-success">
		        </form>
            </div>
        <?php } ?>
        <?php if($fetched_user_data['isPaid'] == '1') {  ?>
            <div class="seepayment">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Date-Time</th>
                        <th>Amount</th>
                        <th>Currency</th>
                        <th>Payment Type</th>
                        <th>Status</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $fetched_user_data['tran_date']; ?></td>
                        <td><?php echo $fetched_user_data['currency_amount']; ?></td>
                        <td><?php echo $fetched_user_data['currency_type']; ?></td>
                        <td><?php echo $fetched_user_data['card_type']; ?></td>
                        <td><?php echo $fetched_user_data['status']; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        <?php } ?>
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