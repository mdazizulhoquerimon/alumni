<?php include('header.php')?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/profileview.css" />
<div class="content-wrapper">
  <div class="account-page login">
      <div class="container">
          <div class="account-title">
              <h4 class="heading-light text-center">Edit Login Credentials</h4>
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
                    <li class="active"><a href="editcredentials"><i class="fa fa-lock"></i>Edit Login Credentials</a></li>
                    <li><a href="#"><i class="fa fa-inbox" aria-hidden="true"></i>Inbox</a></li>
                    <li><a href="paymentinfo"><i class="fa fa-usd" aria-hidden="true"></i>Payment History</a></li>
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
                             <h4 class="text-center" style="margin-bottom: 10px;">Login Credentials</h4>
            <?php if(isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
                <?php } ?>
                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
  <form class="form-horizontal" name="editcredentials" action="editcredentials" method="POST">
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input name="email" id="email" class="form-control" type="text" value="<?php echo $fetched_user_data['email']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input name="username" id="username" class="form-control" type="text" value="<?php echo $fetched_user_data['username']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input name="password" id="password" class="form-control" type="password" value="" placeholder="********">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input name="password2" id="password2" class="form-control" type="password" value="" placeholder="********">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
            <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
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
<?php include('footer.php');?>