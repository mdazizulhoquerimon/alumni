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
                    <a href="#"><img class="img-circle img-responsive" alt="" src="<?php echo base_url(); ?>static/images/peng.jpg"></a>
                    <h1>Elias Miah</h1>
                    <p>Designation</p>
                    <p>Company</p>
                    <div class="">
                       <ul class="list-inline text-center">
                          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      </ul>                                 
                    </div>
                  </div>
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                    <li><a href="#"><i class="fa fa-pencil-square-o"></i>Edit profile</a></li>
                    <li><a href="#"><i class="fa fa-inbox" aria-hidden="true"></i>Inbox</a></li>
                    <li><a href="paymentinfo"><i class="fa fa-usd" aria-hidden="true"></i>Payment History</a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i>Logout</a></li>
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
                             <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Jane">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Doe">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Designation:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Company:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Blood Group:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="A+">A</option>
                  <option value="A-">A-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-" selected="selected">AB-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="janedoe@gmail.com">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Facebook Link</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Instagram Link</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Twitter Link</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="janeuser">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">About Yourself:</label>
            <div class="col-md-8">
              <textarea class="form-control" rows="5" value="Write something about yourself...."></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Change Profile Picture:</label>
            <div class="col-md-8">
                <input type="file" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
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