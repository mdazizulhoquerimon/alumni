<?php
$userId = $userInfo->userId;
$name = $userInfo->name;
$email = $userInfo->email;
$mobile = $userInfo->mobile;
$roleId = $userInfo->roleId;
$batchNo = $userInfo->batchNo;
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Batch Admin Management
        <small>Edit Batch Admin</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Bacth Admin Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="<?php echo base_url() ?>editUser" method="post" id="editUser" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Full Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="Full Name" name="fname" value="<?php echo $name; ?>" maxlength="128">
                                        <input type="hidden" value="<?php echo $userId; ?>" name="userId" id="userId" />    
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cpassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword" maxlength="20">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="text" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile" value="<?php echo $mobile; ?>" maxlength="11">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select class="form-control" id="role" name="role">
                                            <option value="0">Select Role</option>
                                            <?php
                                            if(!empty($roles))
                                            {
                                                foreach ($roles as $rl)
                                                {
                                                    ?>
                                                    <option value="<?php echo $rl->roleId; ?>" <?php if($rl->roleId == $roleId) {echo "selected=selected";} ?>><?php echo $rl->role ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="batchNo">Batch No</label>
                                        <select class="form-control" id="batchNo" name="batchNo">
                                            <option value="01" <?php if($batchNo=='01') {echo "selected=selected";}?> >Batch 01</option>
                                            <option value="02" <?php if($batchNo=='02') {echo "selected=selected";}?> >Batch 02</option>
                                            <option value="03" <?php if($batchNo=='03') {echo "selected=selected";}?> >Batch 03</option>
                                            <option value="04" <?php if($batchNo=='04') {echo "selected=selected";}?> >Batch 04</option>
                                            <option value="05" <?php if($batchNo=='05') {echo "selected=selected";}?> >Batch 05</option>
                                            <option value="06" <?php if($batchNo=='06') {echo "selected=selected";}?> >Batch 06</option>
                                            <option value="07" <?php if($batchNo=='07') {echo "selected=selected";}?> >Batch 07</option>
                                            <option value="08" <?php if($batchNo=='08') {echo "selected=selected";}?> >Batch 08</option>
                                            <option value="09" <?php if($batchNo=='09') {echo "selected=selected";}?> >Batch 09</option>
                                            <option value="10" <?php if($batchNo=='10') {echo "selected=selected";}?> >Batch 10</option>
                                            <option value="11" <?php if($batchNo=='11') {echo "selected=selected";}?> >Batch 11</option>
                                            <option value="12" <?php if($batchNo=='12') {echo "selected=selected";}?> >Batch 12</option>
                                            <option value="13" <?php if($batchNo=='13') {echo "selected=selected";}?> >Batch 13</option>
                                            <option value="14" <?php if($batchNo=='14') {echo "selected=selected";}?> >Batch 14</option>
                                            <option value="15" <?php if($batchNo=='15') {echo "selected=selected";}?> >Batch 15</option>
                                            <option value="16" <?php if($batchNo=='16') {echo "selected=selected";}?> >Batch 16</option>
                                            <option value="17" <?php if($batchNo=='17') {echo "selected=selected";}?> >Batch 17</option>
                                            <option value="18" <?php if($batchNo=='18') {echo "selected=selected";}?> >Batch 18</option>
                                            <option value="19" <?php if($batchNo=='19') {echo "selected=selected";}?> >Batch 19</option>
                                            <option value="20" <?php if($batchNo=='20') {echo "selected=selected";}?> >Batch 20</option>
                                            <option value="21" <?php if($batchNo=='21') {echo "selected=selected";}?> >Batch 21</option>
                                            <option value="22" <?php if($batchNo=='22') {echo "selected=selected";}?> >Batch 22</option>
                                            <option value="23" <?php if($batchNo=='23') {echo "selected=selected";}?> >Batch 23</option>
                                            <option value="24" <?php if($batchNo=='24') {echo "selected=selected";}?> >Batch 24</option>
                                            <option value="25" <?php if($batchNo=='25') {echo "selected=selected";}?> >Batch 25</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Update" />
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>userListing"> Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
</div>

<script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>