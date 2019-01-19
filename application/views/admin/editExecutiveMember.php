<?php
$exMemId = $exMemInfo->ex_mem_id;
$name = $exMemInfo->name;
$mobile = $exMemInfo->mobile;
$designationId = $exMemInfo->designation_id;
$batchNo = $exMemInfo->batchNo;
$activeYear = $exMemInfo->active_year;
$image_path = $exMemInfo->image_path;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Executive Member Management
            <small>Edit Executive Member</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Executive Member Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id="addUser" action="<?php echo base_url() ?>member/updateExecutiveMember" enctype="multipart/form-data" method="post" role="form">
                        <input type="hidden" value="<?= $exMemId; ?>"  name="ex_mem_id" id="ex_mem_id" />
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Full Name</label>
                                        <input type="text" class="form-control required" value="<?= $name; ?>" id="fname" name="fname" maxlength="128">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="text" class="form-control required digits" id="mobile" value="<?= $mobile; ?>" name="mobile" maxlength="11">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Batch No</label>
                                        <select class="form-control required" id="batchNo" name="batchNo">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <select class="form-control required" id="designation" name="designation">
                                            <option value="0" selected disabled>Select Designation</option>
                                            <?php
                                            if(!empty($designation))
                                            {
                                                foreach ($designation as $d)
                                                {
                                                    ?>
                                                    <option value="<?= $d->designation_id ?>" <?php if($d->designation_id == $designationId ) {echo "selected=selected";} ?> ><?= $d->designation ?></option>
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
                                    <div class="form-group col-md-4">
                                        <label for="pimage" style="font-size: 16px;">Previous Images</label>
                                        <?php if (!is_null($image_path)):?>
                                            <img src="<?= $image_path ?>" alt="" width="97" height="97">
                                        <?php else:?>
                                            <img src="<?=base_url('static/images/no_image_found.jpg')?>" alt="" width="97" height="97">
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <a class="btn btn-primary" href="<?php echo base_url('member/editExecutiveMemberWithImage/'.$exMemId ); ?>"> Update With Image</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Active Year</label>
                                        <select class="form-control required" id="active_year" name="active_year">
                                            <option value="2018-2019" <?php if($activeYear=='2018-2019') {echo "selected=selected";}?> >2018-2019</option>
                                            <option value="2019-2020" <?php if($activeYear=='2019-2020') {echo "selected=selected";}?> >2019-2020</option>
                                            <option value="2020-2021" <?php if($activeYear=='2020-2021') {echo "selected=selected";}?> >2020-2021</option>
                                            <option value="2021-2022" <?php if($activeYear=='2021-2022') {echo "selected=selected";}?> >2021-2022</option>
                                            <option value="2022-2023" <?php if($activeYear=='2022-2023') {echo "selected=selected";}?> >2022-2023</option>
                                            <option value="2023-2024" <?php if($activeYear=='2023-2024') {echo "selected=selected";}?> >2023-2024</option>
                                            <option value="2024-2025" <?php if($activeYear=='2024-2025') {echo "selected=selected";}?> >2024-2025</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>member/executiveMemberListing"> Cancel</a>
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
                <div class="row">
                    <div class="col-md-12">
                        <?php if(isset($upload_error)) { echo $upload_error;  }  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>