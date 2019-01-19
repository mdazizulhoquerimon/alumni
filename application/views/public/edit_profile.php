<?php include('header.php')?>
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
                    <li class="active"><a href="editprofile"><i class="fa fa-pencil-square-o"></i>Edit profile</a></li>
                    <li><a href="editcredentials"><i class="fa fa-lock"></i>Edit Login Credentials</a></li>
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
                             <h4 class="text-center" style="margin-bottom: 10px;">Basic Information</h4>
                <?php if(isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
                <?php } ?>
                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
  <form class="form-horizontal" name="edituserdata" action="editprofile" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input name="firstname" id="firstname" class="form-control" type="text" value="<?php echo $fetched_user_data['firstname']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input name="lastname" id="lastname" class="form-control" type="text" value="<?php echo $fetched_user_data['lastname']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Designation:</label>
            <div class="col-lg-8">
              <input name="designation" id="designation" class="form-control" type="text" value="<?php echo $fetched_user_data['designation']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Company/Institution:</label>
            <div class="col-lg-8">
              <input name="companyname" id="companyname" class="form-control" type="text" value="<?php echo $fetched_user_data['companyname']; ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Blood Group:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="bloodgroup" id="bloodgroup" class="form-control">
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
            <div class="ui-select">
                <select name="gender" id="gender" class="form-control">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Date of Birth:</label>
            <div class="col-lg-8">
              <input name="dateofbirth" id="dateofbirth" class="form-control" type="date" name="dateofbirth" value="<?php echo $fetched_user_data['dateofbirth']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone:</label>
            <div class="col-lg-8">
              <input name="phone" id="phone" class="form-control" type="text" value="<?php echo $fetched_user_data['phone']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <input name="address" id="address" class="form-control" type="text" value="<?php echo $fetched_user_data['address']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Facebook Link</label>
            <div class="col-lg-8">
              <input name="facebooklink" id="facebooklink" class="form-control" type="text" value="<?php echo $fetched_user_data['facebooklink']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Instagram Link</label>
            <div class="col-lg-8">
              <input name="instagramlink" id="instagramlink" class="form-control" type="text" value="<?php echo $fetched_user_data['instagramlink']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Twitter Link</label>
            <div class="col-lg-8">
              <input name="twitterlink" id="twitterlink" class="form-control" type="text" value="<?php echo $fetched_user_data['twitterlink']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">About Yourself:</label>
            <div class="col-md-8">
              <textarea name="aboutuser" id="aboutuser" class="form-control" rows="5" placeholder="Write something about yourself..." value="<?php echo $fetched_user_data['aboutuser']; ?>"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Change Profile Picture:</label>
            <div class="col-md-8">
                <input name="imagename" id="imagename" type="file" class="form-control">
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