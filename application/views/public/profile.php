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
                  <div class="user-heading" style="background-color:  #1a265c">
                    <a href="#"><img class="img-circle img-responsive" alt="" src="<?php echo base_url(); ?>static/images/peng.jpg"></a>
                    <h1>Elias Miah</h1>
                    <p>Designation</p>
                    <p>Company</p>
                    <div class="links-social">
                       <ul class="list-inline text-center">
                          <li><a href="#"><i style="color: #f7ca18" class="fa fa-twitter" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i style="color: #f7ca18" class="fa fa-instagram" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i style="color: #f7ca18" class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      </ul>                                 
                    </div>
                  </div>
                  <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                    <li><a href="editprofile"><i class="fa fa-pencil-square-o"></i>Edit profile</a></li>
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
                             <table class="table table-user-information">
                                <tbody>
                                  <tr>
                                    <td>Batch:</td>
                                    <td>08</td>
                                  </tr>
                                  <tr>
                                    <td>Student ID:</td>
                                    <td>0802030</td>
                                  </tr>
                                  <tr>
                                    <td>Date of Birth</td>
                                    <td>01/24/1988</td>
                                  </tr>
                               
                                     <tr>
                                         <tr>
                                    <td>Gender</td>
                                    <td>Male</td>
                                  </tr>
                                    <tr>
                                    <td>Address</td>
                                    <td>Chittagong, Bangladesh</td>
                                  </tr>
                                  <tr>
                                    <td>Email</td>
                                    <td><a href="mailto:info@support.com">info@support.com</a></td>
                                  </tr>
                                    <td>Phone Number</td>
                                    <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                                    </td>
                                       
                                  </tr>
                                 
                                </tbody>
                              </table>
                          </div>
                       </div>
                    </div>
                    <h4 class="text-center" style="margin-bottom: 10px;">Something about Mr. X</h4>
                    <p>
                       Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
                       te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                    </p>
                    <p>
                       Odio recteque expetenda eum ea, cu atqui maiestatis cum. Te eum nibh laoreet, case nostrud nusquam an vis. 
                       Clita debitis apeirian et sit, integre iudicabit elaboraret duo ex. Nihil causae adipisci id eos.
                    </p>
               </div>
            </div>              
          </div>
        </div>
    </div>
  </div>
</div>
<?php include('footer.php');?>